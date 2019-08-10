<?php $this->load->view('layout/header') ?>

<div class="container">
    <div class="col s4 offset-s6">
        <div class="row">
            <?php echo form_open('user/register/save', array('id'=>'formValidate')); ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="formValidate" type="text" class="validate" name="fullName" data-error="<?php echo form_error('fullName'); ?>">
                        <label for="first_name">Full Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" data-error=".errorTxt12">
                        <label for="email">Email</label>
                        <div class="errorTxt2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password" data-error=".errorTxt13">
                        <label for="password">Password</label>
                        <div class="errorTxt3"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input  id="re_password" type="text" class="validate" name="re_password" data-error=".errorTxt14">
                        <label for="re_password">Password Agein</label>
                        <div class="errorTxt4"></div>
                    </div>
                </div>
                <button type="submit" class="btn primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer') ?>

