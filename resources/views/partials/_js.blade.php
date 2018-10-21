
<!-- jQery -->
<script type="text/javascript" src="{!! asset('js/jquery-min.js') !!}"></script>
<!-- MAIN JS -->
<script type="text/javascript" src="{!!  asset('js/main.js') !!}"></script>
<!-- Bootstrap js -->
<script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/jqBootstrapValidation.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="{!! asset('js/smoothscroll.min.js') !!}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3-PDjdugehw4srILhEgVWuNqX4AY54EE&callback=initMap"></script>


<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "name": "WellKnown Agency",
  "url" : "https://wknown.com",
  "sameAs" : [
  "https://twitter.com/WKnownMarketing",
  "https://plus.google.com/u/0/111455513240566433382",
  "https://www.facebook.com/WellKnown-153425045259276/",
  "https://www.linkedin.com/company/wellknown/",
  "https://www.yelp.com/biz/wellknown-boston"
 ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "358 Commonwelath ave",
    "addressLocality": "Boston",
    "addressRegion": "Massachusetts",
    "postalCode": "02115"
  },
  "telephone": "8572653644"
}
</script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.card__social > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
