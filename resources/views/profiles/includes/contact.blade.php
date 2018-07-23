<div class="form-group">
    <label for="telephone_num">Telephone No.</label>
    <input type="text" id="telephone_num" name="telephone_num"
           class="form-control {{$errors->has('telephone_num') ? ' is-invalid' : ''}}" title="Telephone no."
           value="{{empty($contact->telephone_num)? '': $contact->telephone_num}}">
    @if ($errors->has('telephone_num'))
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telephone_num') }}</strong>
                                </span>
    @endif
</div>

<div class="form-group">
    <label for="mobile_num">Mobile No.</label>
    <input type="text" id="mobile_num" name="mobile_num"
           class="form-control {{$errors->has('mobile_num') ? ' is-invalid' : ''}}" title="Mobile no."
           value="{{empty($contact->mobile_num)? '': $contact->mobile_num}}">
    @if ($errors->has('mobile_num'))
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile_num') }}</strong>
                                </span>
    @endif
</div>

<div class="form-group">
    <label for="other_mobile">Other No.</label>
    <input type="text" id="other_mobile" name="other_mobile"
           class="form-control {{$errors->has('other_mobile') ? ' is-invalid' : ''}}" title="Other no."
           value="{{empty($contact->other_mobile)? '': $contact->other_mobile}}">
    @if ($errors->has('other_mobile'))
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('other_mobile') }}</strong>
                                </span>
    @endif
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class="form-control {{$errors->has('email') ? ' is-invalid' : ''}}"
           title="Email" value="{{empty($profile->email)? '': $profile->email}}">
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
    @endif
</div>