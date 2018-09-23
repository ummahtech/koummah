<!-- HEADER
================================================== -->
<div class="undermenuarea">
    <div class="boxedshadow">
    </div>
    <div class="grid">
        <div class="row">
            <div class="c8">
                <h1 class="titlehead">MAKLUMAT PERTANYAAN</h1>
            </div>
            <div class="c4">
                <h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i>&emsp;
                    <font color="black">Hubungi kami di talian +60 9-748 8780</font>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
    <div class="shadowundertop"></div>
    <div class="row space-bot">
        <div class="c12">
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.11207994104!2d102.24521281476858!3d6.115611195571816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6afe71726a499%3A0x76ed62ef9055e427!2sWisma+Ummah!5e0!3m2!1sen!2smy!4v1528084294240" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!--
            <a href="#"><img src="images/wismaummah2.jpg" alt=""></a>
            <img src="images/wismaummah2.jpg" alt=""> -->
        </div>
    </div>

    <div class="row space-top">
        <!-- CONTACT FORM -->

        <div class="c8 space-top">
            <div class="feedback">
                <h1 class="maintitle">
                    <span><i class="icon-envelope-alt"></i> Hantar Emel Kepada Kami </span>
                </h1>
                <form id="contactForm" class="contact-form" name="contact-form" method="post" action="<?php echo base_url('contact/send_mail');?>" data-toggle="validator">
                    <div class="row">
                        <div class="c6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="c6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="c12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="c12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="10" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" class="btn">Hantar</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>

        <!-- END CONTACT FORM -->

        <div class="c4 space-top">
            <h1 class="maintitle">
                <span><i class="icon-map-marker"></i> Alamat</span>
            </h1>
            <p>
                <b> KOPERASI PEMBANGUNAN UMMAH KELANTAN BERHAD</b>
            </p>
            <dl>
                <dt>LOT 421 SEKSYEN 21, WISMA UMMAH,
                    JALAN SULTAN YAHYA PETRA,
                    15200 KOTA BHARU,
                    KELANTAN</dt>
                <dd><i class="icon-phone"></i> 09-7488780</dd>
                <dd><i class="icon-envelope"></i> <a href="mailto:koummahkelantan@gmail.com">koummahkelantan@gmail.com</a></dd>
            </dl>
            <br />
            <p> <b>WAKTU OPERASI</b> <br>
                Sabtu - Khamis : 9.00 pagi sehingga 6.00 petang</p>
        </div>
    </div>
</div>
<!-- end grid -->


<!-- jQuery Form submission handling -->
<!--
<script>
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });


                    $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json'
            });

      });
});
</script>  -->

<!-- SCRIPT FOR CONTACT FORM -->
<script>
    function form_submit() {
        alert("Email Send");
        document.getElementById("contactForm").submit();
    }

</script>
<!-- END SCRIPT FOR CONTACT FORM -->
