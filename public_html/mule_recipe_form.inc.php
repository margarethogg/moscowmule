<style>
    .fileUpload {
  position: relative;
  overflow: hidden;
}
.fileUpload input.upload {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.its_a_trap { display: none; }
</style>
<form action="" enctype="multipart/form-data" id="form" method="post">
    <input name="MAX_FILE_SIZE" type="hidden" value="<?php echo $max_file_size; ?>"/>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label class="recipe-label">
                    Full name
                </label>
                <input class="form-control recipe-form" name="fullname" type="text"/>
            </div>
            <div class="col-sm-6">
                <label class="recipe-label">
                    Email Address
                </label>
                <input class=" form-control recipe-form" name="email" type="email"/>
            </div>
        </div>
    </div>
    <div class="form-group ">
        <div class="row">
            <div class="col-sm-5">
                <label class="recipe-label">
                    City
                </label>
                <input class="form-control recipe-form city" name="city" type="text"/>
            </div>
            <div class="col-sm-3 selectContainer">
                <label class="recipe-label">
                    State
                </label>
                <select class="form-control recipe-form state" name="state">
                    <option value="">
                        Select...
                    </option>
                    <option value="AL">
                        AL
                    </option>
                    <option value="AK">
                        AK
                    </option>
                    <option value="AZ">
                        AZ
                    </option>
                    <option value="AR">
                        AR
                    </option>
                    <option value="CA">
                        CA
                    </option>
                    <option value="CO">
                        CO
                    </option>
                    <option value="CT">
                        CT
                    </option>
                    <option value="DE">
                        DE
                    </option>
                    <option value="DC">
                        DC
                    </option>
                    <option value="FL">
                        FL
                    </option>
                    <option value="GA">
                        GA
                    </option>
                    <option value="HI">
                        HI
                    </option>
                    <option value="ID">
                        ID
                    </option>
                    <option value="IL">
                        IL
                    </option>
                    <option value="IN">
                        IN
                    </option>
                    <option value="IA">
                        IA
                    </option>
                    <option value="KS">
                        KS
                    </option>
                    <option value="KY">
                        KY
                    </option>
                    <option value="LA">
                        LA
                    </option>
                    <option value="ME">
                        ME
                    </option>
                    <option value="MD">
                        MD
                    </option>
                    <option value="MA">
                        MA
                    </option>
                    <option value="MI">
                        MI
                    </option>
                    <option value="MN">
                        MN
                    </option>
                    <option value="MS">
                        MS
                    </option>
                    <option value="MO">
                        MO
                    </option>
                    <option value="MT">
                        MT
                    </option>
                    <option value="NE">
                        NE
                    </option>
                    <option value="NV">
                        NV
                    </option>
                    <option value="NH">
                        NH
                    </option>
                    <option value="NJ">
                        NJ
                    </option>
                    <option value="NM">
                        NM
                    </option>
                    <option value="NY">
                        NY
                    </option>
                    <option value="NC">
                        NC
                    </option>
                    <option value="ND">
                        ND
                    </option>
                    <option value="OH">
                        OH
                    </option>
                    <option value="OK">
                        OK
                    </option>
                    <option value="OR">
                        OR
                    </option>
                    <option value="PA">
                        PA
                    </option>
                    <option value="RI">
                        RI
                    </option>
                    <option value="SC">
                        SC
                    </option>
                    <option value="SD">
                        SD
                    </option>
                    <option value="TN">
                        TN
                    </option>
                    <option value="TX">
                        TX
                    </option>
                    <option value="UT">
                        UT
                    </option>
                    <option value="VT">
                        VT
                    </option>
                    <option value="VA">
                        VA
                    </option>
                    <option value="WA">
                        WA
                    </option>
                    <option value="WV">
                        WV
                    </option>
                    <option value="WI">
                        WI
                    </option>
                    <option value="WY">
                        WY
                    </option>
                </select>
            </div>
            <div class="col-sm-4">
                <label class="recipe-label">
                    Region
                </label>
                <input class="form-control recipe-form region" name="region" readonly="" type="text"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label class="recipe-label">
                    What's It Called?
                </label>
                <input class="form-control recipe-form" name="cocktailname" placeholder="Name your cocktail" type="text"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label class="recipe-label">
                    What's Inside?
                </label>
                <textarea class="form-control recipe-form" name="ingredients" placeholder="List the ingredients (in ounces please)" rows="8">
                </textarea>
            </div>
            <div class="col-sm-6">
                <label class="recipe-label">
                    How To Make It?
                </label>
                <textarea class="form-control recipe-form" name="howto" placeholder="Please describe your complete recipe" rows="8">
                </textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="recipe-label">
            Upload Photo
        </label>
        <br>
            <div class="fileUpload btn btn-large btn-submit">
                <span id="imageAttached" style="white-space: normal;">
                    Click to attach a photo of your cocktail
                </span>
                <input class="upload form-control recipe-form" id="uploadphoto" name="uploadphoto" type="file"/>
            </div>
        </br>
    </div>
    <div class="form-group ">
        <div class="checkbox">
            <label>
                <input name="terms" type="checkbox"/>
                I agree to the <a class="tandc" href="terms.html">Terms & Conditions</a>
            </label>
        </div>
    </div>
</form>
<!--The following field hopefully prevents spambots-->
<div class="its_a_trap">
    <label>
        If you're human leave this blank:
    </label>
    <input class="its_a_trap" id="its_a_trap" name="its_a_trap" type="text" value=""/>
</div>
<div class="col-sm-4 col-sm-offset-8 clearfix">
    <button class="pull-right btn btn-large btn-submit" id="button_submit" name="button_submit" type="submit">
        Submit Your Recipe
    </button>
</div>
