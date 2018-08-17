function isValidName(name) {
            if (!(name == '')) {
                if (!(/[a-zA-ZА-Я\-а-я]+/.test(name.val()))) {
                    name.addClass('red-border');
                    return false;
                }
                name.removeClass('red-border');
                return true;
            }
            name = 'name';
            return true;
        }
        function isValidPhone(phone) {
            if (!(phone == '')) {
                if (!(/\+?\d+\ ?\(?\d+\)?\ ?\d+\ ?\d+\ ?\d+/.test(phone.val()))) {
                    phone.addClass('red-border');
                    return false;
                }
                phone.removeClass('red-border');
                return true;
            }
            phone = '0000000000';
            return true;
        }


        jQuery(document).ready(function(){
            
            jQuery('.menu a').each(function () {
                if ( this.href == location.href){
                    jQuery(this).addClass('active');
                };
            });
			
			jQuery("header .menu li:nth-child(2), footer .menu>ul:first-child li:nth-child(2)").on("click","a", function (event) {
				event.preventDefault();
				var id  = jQuery(this).attr('href'),
					top = jQuery(id).offset().top;
				jQuery('body,html').animate({scrollTop: top}, 1500);
			});
            
            jQuery(".dropdown_list b").click(function (){
              jQuery(this).parent().find("ul").slideToggle();
            }); 

            jQuery('.phone ').mask('+38 (000) 000-00-00');
            
			jQuery('.inline-popups').magnificPopup({
			  delegate: 'a',
			  removalDelay: 500,
			  fixedContentPos: true,
			  callbacks: {
				beforeOpen: function() {
				   this.st.mainClass = this.st.el.attr('data-effect');
				}
			  },
			  midClick: true
			});

            jQuery('.link-buy ').on('click' , function(){
                var GetNameCertificate = jQuery(this).parents('.certificate-block').find(".certificate-name").html();
                jQuery("#popup-buy .modal-name-certificate").html(GetNameCertificate);
                
                jQuery("#certificate").val(GetNameCertificate);
            })

            var tileCountries = jQuery('#counters-wrapper').html();

            jQuery("#owl-reviews").owlCarousel({
                autoPlay : 3000,
                stopOnHover : true,
                navigation:true,
                paginationSpeed : 1000,
                goToFirstSpeed : 2000,
                singleItem:true,
                transitionStyle:"fade"
            });

            owlcounters();
            jQuery(window).resize(function () {
                    owlcounters();
            });

            function owlcounters(){
            if (window.matchMedia("screen and (max-width: 768px)").matches) {
                jQuery("#owl-counters").addClass('owl-carousel');
                jQuery("#owl-counters").owlCarousel({
                    navigation:true,
                    paginationSpeed : 1000,
                    goToFirstSpeed : 2000,
                    singleItem:true,
                    transitionStyle:"fade"
                });
            }
            else{
                jQuery('#counters-wrapper').html('');
                jQuery('#counters-wrapper').html(tileCountries);
            }
        };
            
     });