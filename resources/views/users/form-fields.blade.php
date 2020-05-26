<div class="form-row">
    <div class="form-group col-md-6">
        <label for="input-first-name">First name</label>
        <input type="text" class="form-control" id="input-first-name" name="name_first" required autofocus autocapitalize="on" value="{{ old('name_first', isset($user->name_first) ? $user->name_first : '' ) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="input-last-name">Last name</label>
        <input type="text" class="form-control" id="input-last-name" name="name_last" required autocapitalize="on" value="{{ old('name_last', isset($user->name_last) ? $user->name_last : '' ) }}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="input-email">Email</label>
        <input type="email" class="form-control" id="input-email" name="email" required value="{{ old('email', isset($user->email) ? $user->email : '' ) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="input-phone">Phone</label>
        <input type="text" inputmode="numeric" class="form-control" id="input-phone" name="phone_number" required value="{{ old('phone_number', isset($user->phone_number) ? $user->phone_number : '' ) }}">
    </div>
</div>
