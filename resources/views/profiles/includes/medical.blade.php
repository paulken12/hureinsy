<input type="hidden" name="key" value="{{empty($medical->id) ? '':$medical->id}}">

<div class="form-group">
    <label for="master_blood_key">Blood type</label>
    <input type="text" id="master_blood_key" name="master_blood_key"
           class="form-control" title="Blood type"
           value="{{empty($medical->bloodType->blood_type) ? '':$medical->bloodType->blood_type}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="height">Height (m)</label>
    <input type="text" id="height" name="height" class="form-control"
           title="Height (m)" value="{{empty($medical->height) ? '':$medical->height}}">
</div>

<div class="form-group">
    <label for="weight">Weight (kg)</label>
    <input type="text" id="weight" name="weight" class="form-control"
           title="Weight (kg)" value="{{empty($medical->weight) ? '':$medical->weight}}">
</div>