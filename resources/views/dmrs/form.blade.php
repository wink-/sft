
<div class="row">

    <div class="col-md-6">
        {{ csrf_field() }}


        <input type="hidden" name="workorder" value="{{ $workorder->WORKORDR }}">

        <div class="form-group">
            <label for="date_of_discrepancy">Date of Discrepancy:</label>
            <input type="date" name="date_of_discrepancy" id="date_of_discrepancy" class="form-control" value="{{ old('date_of_discrepancy') }}"required>
        </div>

        <div class="form-group">
            <label for="description_of_discrepancy">Description of Discrepancy:</label>
            <textarea type="text" name="description_of_discrepancy" id="description_of_discrepancy" class="form-control" rows="10" required>{{ old('description_of_discrepancy') }}</textarea>
        </div>

        <div class="form-group">
            <label class="radio-inline"><input type="radio" name="rejection_type" value="internal">SFT Internal</label>
            <label class="radio-inline"><input type="radio" name="rejection_type" value="external">Customer External</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="corrective_action_due_date">Corrective Action Due Date:</label>
            <input type="date" name="corrective_action_due_date" id="corrective_action_due_date" class="form-control" value="{{ old('corrective_action_due_date') }}">
        </div>

        <div class="form-group">
            <label for="internal_comments">Internal Comments:</label>
            <textarea type="text" name="internal_comments" id="internal_comments" class="form-control" rows="10" required>{{ old('internal_comments') }}</textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>

        <div class="form-group">
            <button type="submit" class="btn  btn-primary">Create DMR</button>
        </div>
    </div>
</div>