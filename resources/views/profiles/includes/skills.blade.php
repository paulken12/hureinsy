<input type="hidden" name="key" value="{{empty($skill->id) ? '':$skill->id}}">

<div class="form-group">
    <label for="special_skill">Special skill</label>
    <input type="text" id="special_skill" name="special_skill" class="form-control"
           title="Special skill" value="{{empty($skill->special_skill) ? '':$skill->special_skill}}">
</div>

<div class="form-group">
    <label for="hobbies">Hobbies</label>
    <input type="text" id="hobbies" name="hobbies" class="form-control" title="Hobbies" value="{{empty($skill->hobbies) ? '':$skill->hobbies}}">
</div>

<div class="form-group">
    <label for="membership">Membership</label>
    <input type="text" id="membership" name="membership" class="form-control"
           title="Membership" value="{{empty($skill->membership) ? '':$skill->membership}}">
</div>

