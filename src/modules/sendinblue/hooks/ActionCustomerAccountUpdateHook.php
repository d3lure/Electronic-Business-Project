<?php
/**
 * 2007-2022 Sendinblue
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@sendinblue.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Sendinblue <contact@sendinblue.com>
 * @copyright 2007-2022 Sendinblue
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Sendinblue
 */

namespace Sendinblue\Hooks;

class ActionCustomerAccountUpdateHook extends AbstractHook
{
    /**
     * @param \CustomerCore $customer
     */
    public function handleEvent($customer)
    {
        try {
            if (!$customer->id) {
                return;
            }

            if ($customer->newsletter) {
                $contactPayload = [
                    'id' => $customer->id,
                    'id_default_group' => $customer->id_default_group,
                    'id_lang' => !is_null($this->getContextlanguage()) ? $this->getContextlanguage()->iso_code : null,
                    'email' => $customer->email,
                    'firstname' => $customer->firstname,
                    'lastname' => $customer->lastname,
                    'id_gender' => $customer->id_gender,
                    'newsletter_date_add' => date('Y-m-d', strtotime($customer->newsletter_date_add)),
                    'newsletter' => "true",
                    'birthday' => $customer->birthday,
                    'date_add' => date('Y-m-d', strtotime($customer->date_add)),
                    'date_upd' => date('Y-m-d', strtotime($customer->date_upd)),
                ];

                if ($customer->newsletter_date_add === $customer->date_upd) {
                    $this->getApiClientService()->createContact($contactPayload);
                } else {
                    $this->getApiClientService()->updateContact($contactPayload);
                }
            } else {
                $this->getApiClientService()->deleteContact(['email' => $customer->email]);
            }
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }
}
