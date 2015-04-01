<div class="uk-form-row">
    {{ Form::labelUk('nama', 'Nama Tempat') }}
    {{ Form::textUk('nama', 'Nama Tempat', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('lokasi', 'Lokasi') }}
    {{ Form::textUk('lokasi', 'Lokasi', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('jasa', 'Jasa') }}
    {{ Form::textUk('jasa', 'Jasa', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('biaya_servis', 'Biaya Jasa') }}
    {{ Form::textUk('biaya_servis', 'Biaya Jasa', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('kontak', 'Kontak') }}
    {{ Form::textUk('kontak', 'Kontak', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('jam_buka', 'Jam Buka') }}
    {{ Form::textUk('jam_buka', 'Jam Buka', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('rekomendasi', 'Rekomendasi') }}
    {{ Form::textUk('rekomendasi', 'Rekomendasi', 'uk-icon-user') }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('rating', 'Rating') }}
    {{ Form::textUk('rating', 'Rating', 'uk-icon-user') }}
</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>