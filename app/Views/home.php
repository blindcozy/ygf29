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
                    <iframe src="https://www.youtube.com/embed/18Pcn1T7nEc?modestbranding=1&autoplay=1&mute=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            </div>
            <div class="uk-width-1-4@m">
                <!-- <div style="background-color:rgba(4,1,51,.71);">
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
                </div> -->
				<div class="uk-position-relative uk-visible-toggle uk-light uk-margin-top" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; ratio: 9:16">
					<ul class="uk-slideshow-items">
						<li>
							<a href="program#lokakarya-gamelan"><img src="images/LOKAKARYA-01.jpg" alt="Lokakarya" uk-cover></a>
						</li>
						<li>
							<a href="program#rembug-budaya"><img src="images/REMBUG-03.jpg" alt="Rembug Budaya" uk-cover></a>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
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
        <div>
            <style>
                .button-home {
                    display: block;
                    background-image: url(images/29bg.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;
                    border: 2px solid #fff;
                    color: #fff;
                    padding: 15px 15px 15px 60px;
                    font-family: "Cinzel Decorative", serif;
                    font-size: 30px;
                    line-height: 1;
                    font-weight: 700;
                    position: relative;
                    overflow: hidden;
                }
                .button-home:hover,
                .button-home:active {
                    color: #fff;
                    text-decoration: none;
                }
                .home-button-image {
                    height: 100px;
                    width: 100px;
                    position: absolute;
                    left: -50px;
                    bottom: -50px;
                }
            </style>
            <?php
            if ($ismobile) {
                $menu = 'uk-flex-center';
                $socmed = 'uk-flex-center';
                $copyright = 'uk-text-center';
            } else {
                $menu = 'uk-flex-between';
                $socmed = 'uk-flex-left';
                $copyright = 'uk-text-left';
            }
            ?>
            <div class="uk-margin uk-grid-small uk-child-width-auto <?=$menu?>" uk-grid>
                <div>
                    <a class="button-home"><img class="home-button-image" src="images/mandala.png" /> Lokakarya</a>
                </div>
                <div>
                    <a class="button-home"><img class="home-button-image" src="images/mandala.png" /> Rembug Budaya</a>
                </div>
                <div>
                    <a class="button-home"><img class="home-button-image" src="images/mandala.png" /> Concert</a>
                </div>
                <div>
                    <a class="button-home"><img class="home-button-image" src="images/mandala.png" /> Gaung Gamelan</a>
                </div>
            </div>
            <div class="uk-margin uk-light uk-child-width-auto <?=$socmed?>" uk-grid>
                <div>
                    <a class="uk-link-text" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><span uk-icon="facebook"></span> YogyakartaGamelanFestival</a>
                </div>
                <div>
                    <a class="uk-link-text" href="https://www.instagram.com/komunitasgayam16/" target="_blank"><span uk-icon="instagram"></span> komunitasgayam16</a>
                </div>
            </div>
            <div class="uk-margin uk-light <?=$copyright?>">
                Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>