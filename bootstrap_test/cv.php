<?php
    require_once('template_header.php');
    require_once('template_menu.php');
    renderMenuToHTML("cv") ;
?>
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Mon CV</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">IMT-Nord-Europe</h3>
                            <div class="subheading mb-3">Dipolme d'ingénieur</div>
                            <div>Computer Science - Data science</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2019 - Mai 2023</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Ecole polythecnique de Montreal</h3>
                            <div class="subheading mb-3">Semestre Académique</div>
                            <p>GPA: 3.20</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Aout 2022 - Decembre 2022</span></div>
                    </div>
                </div>
            </section>
<?php
    require_once('template_footers.php');
?>          