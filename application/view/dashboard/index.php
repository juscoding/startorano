<div class="container">
    <h1>DashboardController/index</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>Startorano</h3>
        <!-- DropDownInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeDropDown">
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementFirst closed">
                <p>Auswahl</p>
                <img src="<?php echo Config::get('URL'); ?>images/svg/arrowDownIcon.svg" alt="arrowDownIcon">
            </div>
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementLoaded">
                <p>Heinzl</p>
            </div>
            <?php foreach ($this->dropdownjobs as $option) { ?>
                <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementLoaded">
                    <p><?= $option->Jobbezeichnung; ?></p>
                </div>
            <?php } ?>
        </div>
        <!-- DropDownInput END -->
    </div>
</div>
