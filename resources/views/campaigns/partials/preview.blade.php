<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <x-sendportal.text-field name="name" :label="__('Campaign Name')" :value="$campaign->name ?? old('name')" disabled />
                <x-sendportal.text-field name="subject" :label="__('Email Subject')" :value="$campaign->subject ?? old('subject')" disabled />
                <x-sendportal.text-field name="from_name" :label="__('From Name')" :value="$campaign->from_name ?? old('from_name')" disabled />
                <x-sendportal.text-field name="from_email" :label="__('From Email')" type="email" :value="$campaign->from_email ?? old('from_email')" disabled />
                <x-sendportal.text-field name="reply_to" :label="__('Reply To')" type="email" :value="$campaign->reply_to ?? old('reply_to')" disabled />

                <x-sendportal.select-field name="template_id" :label="__('Template')" :options="$templates" :value="$campaign->template_id ?? old('template_id')" disabled />

                <x-sendportal.select-field name="email_service_id" :label="__('Email Service')" :options="$emailServices->pluck('formatted_name', 'id')" :value="$campaign->email_service_id ?? old('email_service_id')" disabled />

                <x-sendportal.checkbox-field name="is_open_tracking" :label="__('Track Opens')" value="1" :checked="$campaign->is_open_tracking ?? true" disabled />
                <x-sendportal.checkbox-field name="is_click_tracking" :label="__('Track Clicks')" value="1" :checked="$campaign->is_click_tracking ?? true" disabled />
                <x-sendportal.textarea-field name="content" :label="__('Content')" required="required" rows="100">{{ $campaign->content ?? old('content') }}</x-sendportal.textarea-field>
            </div>
        </div>
    </div>
</div>

@include('sendportal::campaigns.reports.partials.summernote')
