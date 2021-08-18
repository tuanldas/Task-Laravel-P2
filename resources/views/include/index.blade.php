<div class="wrap-input3 validate-input" data-validate="Name is required">
    <input class="input3" type="text" name="name" placeholder="Your Name" value="{{ isset($data['name']) ? $data['name'] : '' }}">
    <span class="focus-input3"></span>
    @if ($errors->any())
        <ul>
            <li style="color: darkgreen">{{ $errors->first('name') }}</li>
        </ul>
    @endif
</div>

<div class="wrap-input3 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input class="input3" type="text" name="email" placeholder="Your Email" value="{{ isset($data['email']) ? $data['email'] : '' }}">
    <span class="focus-input3"></span>
    @if ($errors->any())
        <ul>
            <li style="color: darkgreen">{{ $errors->first('email') }}</li>
        </ul>
    @endif
</div>

<div class="wrap-input3 validate-input" data-validate="Message is required">
    <input class="input3" name="phone" placeholder="phone" value="{{ isset($data['phone']) ? $data['phone'] : '' }}"></input>
    <span class="focus-input3"></span>
    @if ($errors->any())
        <ul>
            <li style="color: darkgreen">{{ $errors->first('phone') }}</li>
        </ul>
    @endif
</div>

<div class="container-contact3-form-btn">
    <button class="contact3-form-btn">
        Submit
    </button>
</div>