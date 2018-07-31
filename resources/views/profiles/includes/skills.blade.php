<input type="hidden" name="skill_key" value="{{empty($skill->id) ? '':$skill->id}}">

<div class="form-group">
    <label for="skill_special_skill">Special skill</label>
    <input type="text" id="skill_special_skill" name="skill_special_skill" class="form-control"
           title="Special skill" value="{{empty($skill->special_skill) ? '':$skill->special_skill}}">
</div>

<div class="form-group">
    <label for="skill_hobbies">Hobbies</label>
    <input type="text" id="skill_hobbies" name="skill_hobbies" class="form-control" title="Hobbies" value="{{empty($skill->hobbies) ? '':$skill->hobbies}}">
</div>

<div class="form-group">
    <label for="skill_membership">Membership</label>
    <input type="text" id="skill_membership" name="skill_membership" class="form-control"
           title="Membership" value="{{empty($skill->membership) ? '':$skill->membership}}">
</div>

