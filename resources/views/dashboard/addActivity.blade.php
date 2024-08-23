<div class="tab-pane fade" id="addActivity" role="tabpanel" aria-labelledby="addActivity-tab">

    <h2 class="mb-4">Add an activity</h2>
    <div class="row">
        <div class="col-xl-12">

            <form class="row g-3 mb-6">
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                            <option selected="selected" value="1">Helping Local schools to get good education
                            </option>
                            <option value="2">Effective waste and water management plan</option>
                        </select><label for="floatingInputGrid">TITLE</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select><label for="floatingSelectTask">SEM</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating"><select class="form-select" id="floatingSelectTeam">
                            <option selected="selected" value="1">2021-22</option>
                            <option value="2">2022-23</option>
                            <option value="3">2023-24</option>
                            <option value="4">2024-25</option>
                        </select><label for="floatingSelectTeam">Year </label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating"><select class="form-select" id="floatingSelectAssignees">
                            <option selected="selected" value="1">CSE</option>
                            <option value="2">ISE</option>
                            <option value="3">ECE</option>
                            <option value="4">MECH</option>
                            <option value="5">CIVIL</option>
                        </select><label for="floatingSelectAssignees">BRANCH </label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating"><select class="form-select" id="floatingSelectAdmin">
                            <option selected="selected">Select admin</option>
                            <option value="1">Ashwitha Shetty</option>
                            <option value="2">Snitha Shetty</option>
                            <option value="3">Stanley pradeep</option>
                        </select><label for="floatingSelectAdmin">ACTIVITY COORDINATOR</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="flatpickr-input-container">
                        <div class="form-floating"><input class="form-control datetimepicker"
                                id="floatingInputStartDate" type="text" placeholder="end date"
                                data-options='{"disableMobile":true}' /><label class="ps-3"
                                for="floatingInputStartDate">Start date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="flatpickr-input-container">
                        <div class="form-floating"><input class="form-control datetimepicker" id="floatingInputEndDate"
                                type="text" placeholder="end" data-options='{"disableMobile":true}' /><label
                                class="ps-3" for="floatingInputend">End Date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating"><input class="form-control" type="number"><label
                            for="floatingSelectAssignees">DURATION </label></div>
                </div>
                <div class="col-12 gy-6">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"></textarea><label for="floatingProjectOverview">Activity overview</label>
                    </div>
                </div>
                <div class="col-md-6 gy-6">
                    <div class="form-floating">
                        <input class="form-control" id="floatingInputBudget" type="file" />
                        <label class="form-label">Upload Image</label>
                    </div>
                </div>
                <div class="col-md-6 gy-6">
                    <div class="form-floating">
                        <input class="form-control" id="floatingInputBudget" type="file" />
                        <label class="form-label">Upload Certificate</label>
                    </div>
                </div>

                <div class="col-12 gy-6">
                    <div class="row g-3 justify-content-end">
                        <div class="col-auto"><button class="btn btn-phoenix-primary px-5">Cancel</button></div>
                        <div class="col-auto"><button class="btn btn-primary px-5 px-sm-15">Submit</button></div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
