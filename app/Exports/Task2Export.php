<?php

namespace App\Exports;

use App\Models\Group;
use App\Models\Subscriber;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Task2Export implements FromQuery,WithHeadings
{

    use Exportable;

    public function query()
    {
        $q = Group::query();
        return $q->select('jos_user_usergroup_map.group_id','jos_osmembership_subscribers.*')
            ->join('jos_osmembership_subscribers' ,'jos_user_usergroup_map.user_id','jos_osmembership_subscribers.user_id')
            ->whereIn('jos_osmembership_subscribers.plan_id', [ 1, 5, 7, 8, 26, 27])
            ->where('jos_osmembership_subscribers.published', 2);
    }

    public function headings(): array
    {
        return [
            "group_id",
            "id" ,
            "plan_id" ,
            "user_id" ,
            "coupon_id" ,
            "first_name" ,
            "last_name" ,
            "organization" ,
            "address" ,
            "address2" ,
            "city" ,
            "state" ,
            "zip" ,
            "country" ,
            "phone" ,
            "fax" ,
            "email" ,
            "created_date" ,
            "payment_date" ,
            "from_date" ,
            "to_date" ,
            "published" ,
            "amount" ,
            "tax_amount" ,
            "discount_amount" ,
            "gross_amount",
            "subscription_code" ,
            "payment_method" ,
            "transaction_id" ,
            "act" ,
            "from_subscription_id" ,
            "renew_option_id" ,
            "upgrade_option_id" ,
            "first_reminder_sent" ,
            "second_reminder_sent" ,
            "process_payment_for_subscription" ,
            "vies_registered" ,
            "offline_recurring_email_sent" ,
            "show_on_members_list" ,
            "refunded" ,
            "parent_id" ,
            "auto_subscribe_processed" ,
            "is_free_trial" ,
            "subscribe_newsletter" ,
            "agree_privacy_policy" ,
            "mollie_customer_id" ,
            "mollie_recurring_start_date" ,
            "tax_rate" ,
            "trial_payment_amount" ,
            "payment_amount" ,
            "payment_currency" ,
            "receiver_email" ,
            "avatar" ,
            "payment_made" ,
            "params" ,
            "recurring_profile_id",
            "subscription_id",
            "recurring_subscription_cancelled",
            "renewal_count" ,
            "from_plan_id" ,
            "membership_id" ,
            "invoice_year" ,
            "is_profile" ,
            "invoice_number" ,
            "profile_id" ,
            "language" ,
            "username" ,
            "user_password" ,
            "payment_processing_fee" ,
            "group_admin_id" ,
            "subscription_end_sent" ,
            "third_reminder_sent" ,
            "first_reminder_sent_at" ,
            "second_reminder_sent_at" ,
            "third_reminder_sent_at" ,
            "subscription_end_sent_at" ,
            "plan_main_record" ,
            "plan_subscription_status" ,
            "plan_subscription_from_date" ,
            "plan_subscription_to_date" ,
            "setup_fee" ,
            "gateway_customer_id" ,
            "formatted_invoice_number" ,
            "formatted_membership_id" ,
            "first_sms_reminder_sent" ,
            "second_sms_reminder_sent" ,
            "third_sms_reminder_sent" ,
            "ip_address" ,
            "active_event_triggered" ,

        ];
    }
}
