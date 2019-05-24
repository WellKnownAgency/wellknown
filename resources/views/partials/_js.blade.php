<script type="text/javascript" src="{!! asset('js/js/core/popper.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/core/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/core/bootstrap.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('js/js/plugins/bootstrap-switch.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/nouislider.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/moment.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/jasny-bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/bootstrap-tagsinput.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/bootstrap-selectpicker.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/bootstrap-datetimepicker.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/now-ui-kit.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/js/plugins/presentation-page/rellax.min.js') !!}"></script>
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    if ($(window).width() >= 991) {

      setTimeout(function() {
        var rellax = new Rellax('.rellax', {
          center: true
        });
      }, 5000);

      var rellaxHeader = new Rellax('.rellax-header');
      var rellaxText = new Rellax('.rellax-text');
    }

  });
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "telephone": "339-545-0956",
	"email":"info@wknown.com",
  "image": "https://wknown.com/images/wk.jpg",
  "name": "WellKnown Agency",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Boston",
    "addressRegion": "MA",
    "postalCode": "02115",
    "streetAddress": "358 Commonwealth avenu"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "7"
  },
  "url": "https://wknown.com/"
}
</script>
@yield('customjs')
