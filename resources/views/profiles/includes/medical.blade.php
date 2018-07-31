<input type="hidden" name="med_key" value="{{empty($medical->id) ? '':$medical->id}}">

<div class="form-group">

    @if(!empty($medical->bloodType->blood_type))
        <label for="med_blood_key">Blood type</label>
        <input type="text" id="med_blood_key" name="med_blood_key"
               class="form-control" title="Blood type"
               value="{{empty($medical->bloodType->blood_type) ? '':$medical->bloodType->blood_type}}">
    @else
        <div class="form-group">
            <label for="med_blood_key">Blood type</label>
            <select name="med_blood_key" id="med_blood_key" class="form-control">
                @foreach ($blood as $type)
                    <option value="{{$type->key}}">{{$type->blood_type}}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>

<div class="form-group">
    <label for="med_height">Height (m)</label>
    <input type="text" id="med_height" name="med_height" class="form-control"
           title="Height (m)" value="{{empty($medical->height) ? '':$medical->height}}">
</div>

<div class="form-group">
    <label for="med_weight">Weight (kg)</label>
    <input type="text" id="med_weight" name="med_weight" class="form-control"
           title="Weight (kg)" value="{{empty($medical->weight) ? '':$medical->weight}}">
</div>