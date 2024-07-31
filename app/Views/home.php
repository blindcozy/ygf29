<?= $this->extend('layout') ?>

<?= $this->section('pageStyles') ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<?php
if (isset($messagesession)) {
    $unhide = '';
    $hidden = 'hidden';
    $name = 'value="'.$messagesession['name'].'"';
    $email = 'value="'.$messagesession['email'].'"';
    $country = 'value="'.$messagesession['country'].'"';
    $age = 'value="'.$messagesession['age'].'"';
} else {
    $unhide = 'hidden';
    $hidden = '';
    $name = '';
    $email = '';
    $country = '';
    $age = '';
}
$countries = array();
foreach ($countriesarr as $countryarr) {
    $countries[] = $countryarr['name']['common'];
}
?>
<section>
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-3-4@m">
                <div class="uk-width-1-1 uk-margin uk-margin-top embed-container">
                    <iframe src="https://www.youtube.com/embed/kYE5rVuhgHQ?modestbranding=1&autoplay=1&mute=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- <div class="uk-width-1-1 uk-height-large uk-flex uk-flex-middle uk-flex-center uk-margin-top">
                    <div class="uk-h1 uk-text-center uk-light">THANK YOU!<br/><br/>See you next year..</div>
                </div> -->
                <!-- <div class="uk-width-1-1 uk-height-large uk-margin uk-margin-top uk-flex uk-flex middle uk-flex-center">
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-grid-small uk-child-width-auto uk-light" uk-grid uk-countdown="date: 2023-08-20T15:00:00+07:00">
                            <div>
                                <div class="uk-countdown-number uk-countdown-days"></div>
                                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-hours"></div>
                                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-minutes"></div>
                                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-seconds"></div>
                                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <style type="text/css">
                    .button-home {
                        line-height: 40px;
                    }
                    @media (max-width:767px) {
                        .button-home {
                            line-height: 20px;
                        }
                    }
                </style>
                <div class="uk-child-width-auto uk-margin uk-flex-center" uk-grid>
                    <div>
                        <a class="uk-link-reset" href="#lokakarya-gamelan" uk-toggle>
                            <img src="images/workshop-button.svg" height="100" uk-svg />
                        </a>
                    </div>
                    <div>
                        <a class="uk-link-reset" href="#rembug-budaya" uk-toggle>
                            <img src="images/rembug-budaya-button.svg" height="100" uk-svg />
                        </a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div style="background-color:rgba(4,1,51,.71);">
                    <div id="showmessage" class="uk-margin-top uk-panel uk-panel-scrollable" style="height:500px; border:none;">
                    </div>
                    <script type="application/javascript">
                        setInterval(function(){
                            $('#showmessage').load('showmessage');
                            $('#showmessage').scrollTop($('#showmessage')[0].scrollHeight);
                        }, 10000);
                    </script>
                    <div id="messagecontainer" class="uk-margin-bottom uk-padding-small uk-light" style="border: 2px solid #fff;" <?php echo $unhide; ?>>
                        <form id="messageform" class="uk-form-stacked" method="post" accept-charset="utf-8">
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messagename" class="uk-input" name="name" type="text" placeholder="Name" <?php echo $name; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messageemail" class="uk-input" name="email" type="email" placeholder="Email" <?php echo $email; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messagecountry" class="uk-input" name="country" type="text" placeholder="Country" <?php echo $country; ?>>
                                </div>
                            </div>
                            <div class="uk-margin" hidden>
                                <div class="uk-form-controls">
                                    <input id="messageage" class="uk-input" name="age" type="number" placeholder="Age" <?php echo $age; ?>>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="messagetext" class="uk-input" name="message" type="text" placeholder="Message" required>
                                </div>
                            </div>
                            <button class="uk-button uk-button-default" type="submit" hidden>Submit</button>
                        </form>
                        <script type="application/javascript">
                            $(document).ready(function() {
                                $('#messageform').submit(function(event) {
                                    var formData = {
                                        'name'			: $('input[name="name"]').val(),
                                        'email'			: $('input[name="email"]').val(),
                                        'country'		: $('input[name="country"]').val(),
                                        'age'			: $('input[name="age"]').val(),
                                        'message'		: $('input[name="message"]').val()
                                    };
                                    
                                    $.ajax({
                                        type        : 'POST',
                                        url         : 'sendmessage',
                                        data        : formData,
                                        dataType    : 'text',
                                        //encode      : true,
                                        error: function () {
                                            console.log('error', arguments);
                                        },
                                        complete: function () {
                                            console.log('complete', arguments);
                                            var name = document.getElementById("messagename");
                                            var email = document.getElementById("messageemail");
                                            var country = document.getElementById("messagecountry");
                                            var age = document.getElementById("messageage");
                                            var text = document.getElementById("messagetext");
                                            
                                            name.setAttribute('hidden', '');
                                            email.setAttribute('hidden', '');
                                            country.setAttribute('hidden', '');
                                            age.setAttribute('hidden', '');
                                            text.value = '';
                                        }
                                    })
                                    .done(function(data) {
                                        console.log(data);
                                    })
                                    .fail(function(data) {
                                        console.log(data);
                                    });
                                    event.preventDefault();
                                });
                            });
                        </script>
                    </div>
                    <div id="openingformcontainer" class="uk-margin-bottom uk-padding-small uk-light" style="border: 2px solid #000;" <?php echo $hidden; ?>>
                        <form id="openingform" class="uk-margin-small-top uk-form-stacked">
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="openingmessage" class="uk-input" name="openingmessage" type="text" placeholder="Message" required required onkeydown="popup()" style="font-weight:700;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<!-- <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-top" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; ratio: 9:16">
					<ul class="uk-slideshow-items">
						<li>
							<a href="program#lokakarya-gamelan"><img src="images/LOKA-03.jpg" alt="Lokakarya" uk-cover></a>
						</li>
						<li>
							<a href="program#rembug-budaya"><img src="images/REMBUG-BUDAYA-01.jpg" alt="Rembug Budaya" uk-cover></a>
						</li>
						<li>
							<a href="program#konser-gamelan"><img src="images/RUNDOW-HARIAN-02.jpg" alt="Konser Gamelan" uk-cover></a>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
				</div> -->
                <div class="uk-text-right uk-light">
                    Developed by<br/><a class="uk-link-reset uk-text-bold" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
                </div>
                <div id="datacontainer" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light" style="background-color:#000; border:2px solid #fff; width:350px;">
                        <p>Mohon masukkan data diri anda untuk bisa memulai mengirim pesan</p>
                        <form id="dataform" class="uk-form-stacked">
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataname" class="uk-input" name="dataname" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataemail" class="uk-input" name="dataemail" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <select id="datacountry" class="uk-select" name="datacountry">
                                        <option value="" disabled selected>-- Select Country --</option>
                                        <?php
                                        foreach ($countries as $country) {
                                            echo '<option value="'.$country.'">'.$country.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input id="dataage" class="uk-input" name="dataage" type="number" placeholder="Age" required>
                                </div>
                            </div>
                            <div class="uk-margin uk-text-center">
                                <button class="uk-button uk-button-default" type="submit" onclick="closemodal()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="application/javascript">
                    function popup() {
                        if (event.keyCode == 13) {
                            UIkit.modal('#datacontainer').show();
                            event.preventDefault();
                        }
                    };
                    function closemodal() {
                        UIkit.modal('#datacontainer').hide();
                    };
                    $(document).ready(function() {
                        $('#dataform').submit(function(event) {
                            document.getElementById("messagename").setAttribute('value', $('input[name="dataname"]').val());
                            document.getElementById("messageemail").setAttribute('value', $('input[name="dataemail"]').val());
                            document.getElementById("messagecountry").setAttribute('value', $('select[name="datacountry"]').val());
                            document.getElementById("messageage").setAttribute('value', $('input[name="dataage"]').val());
                            document.getElementById("messagecontainer").removeAttribute('hidden');
                            document.getElementById("openingformcontainer").setAttribute('hidden', '');
                            event.preventDefault();
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<div id="lokakarya-gamelan" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light" style="background-color:#000; border:2px solid #fff;">
        <h2 class="uk-modal-title uk-text-center">Lokakarya Gamelan</h2>
		<div class="uk-margin-small">
			<img class="uk-width-1-1" src="images/LOKA-04.jpg" />
		</div>
        <div class="uk-child-width-auto uk-flex-center" uk-grid>
            <div><a class="uk-button uk-button-secondary uk-text-uppercase" href="http://bit.ly/LokakaryaRembugBudayaYGF" target="_blank">Daftar</a></div>
            <div><a class="uk-button uk-button-primary uk-text-uppercase" href="program#lokakarya-gamelan">Info</a></div>
        </div>
    </div>
</div>
<div id="rembug-budaya" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light" style="background-color:#000; border:2px solid #fff;">
        <h2 class="uk-modal-title uk-text-center">Rembug Budaya</h2>
		<div class="uk-margin-small">
			<img class="uk-width-1-1" src="images/REMBUG-BUDAYA-02.jpg" />
		</div>
        <div class="uk-child-width-auto uk-flex-center" uk-grid>
            <div><a class="uk-button uk-button-secondary uk-text-uppercase" href="http://bit.ly/LokakaryaRembugBudayaYGF" target="_blank">Daftar</a></div>
            <div><a class="uk-button uk-button-primary uk-text-uppercase" href="program#rembug-budaya">Info</a></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>