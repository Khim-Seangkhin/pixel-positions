<x-layout>
    <x-button-back />
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Tbong Khmum, Phnom Penh"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" value="https://jobify.works/jobs/968"/>
        <x-forms.checkbox label="Feature (Costs Extar)" name="featured"/>

        <x-forms.divider />

        <x-forms.input label="Tags (Comma separeted)" name="tags" value="Laracasts, Video, Education"/>
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>