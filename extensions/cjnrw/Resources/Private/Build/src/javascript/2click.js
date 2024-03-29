document.ready = function( callback ) {
  if( document.readyState != 'loading' ) {
    callback();
  } else {
    document.addEventListener( 'DOMContentLoaded', callback );
  }
};
var iFrame2C = {};
iFrame2C.rescale = function( iframe, format ) {

  let formatWidth = parseInt( format.split(':')[0] );
  let formatHeight = parseInt( format.split(':')[1] );
  let formatRatio = formatHeight / formatWidth;
  var iframeBounds = iframe.getBoundingClientRect();

  let currentWidth = iframeBounds.width;
  let newHeight = formatRatio * currentWidth;

  iframe.style.height = Math.round( newHeight ) + "px";

};

function iframeResize() {
  var iframes = document.querySelectorAll( 'iframe[data-scaling="true"]' );
  if( !!iframes.length ) {

    for( var i=0; i < iframes.length; i++ ) {

      let iframe = iframes[ i ];
      let videoFormat = '16:9';

      let is_data_format_existing = typeof iframe.getAttribute( 'data-format' ) !== "undefined";
      if (is_data_format_existing ) {
        let is_data_format_valid = iframe.getAttribute( 'data-format' ).includes( ':' );
        if (is_data_format_valid ) {
          videoFormat = iframe.getAttribute( 'data-format' );
        }
      }
      iFrame2C.rescale( iframe, videoFormat );
    }
  }
}

document.ready( function() {
  window.addEventListener( "resize", function() {
    iframeResize();
  });
  iframeResize();
});

function get_source_url( data_type ) {
  switch( data_type ) {
    case "youtube":
      return "https://www.youtube-nocookie.com/embed/{SOURCE}?rel=0&controls=1&showinfo=0&autoplay=0";

    case "google-maps":
      return "{SOURCE}";
    default: break;
  }
}
function allowVideosFromYouTube() {
  var video_wrapper = document.querySelectorAll( '.video_wrapper');
  if (!!video_wrapper.length ) {
    for( var i=0; i < video_wrapper.length; i++ ) {
      let _wrapper = video_wrapper[ i ];
      var video_triggers = _wrapper.querySelectorAll( '.video_trigger' );
      if( !!video_triggers.length ) {
        for( var l=0; l < video_triggers.length; l++ ) {
          var video_trigger = video_triggers[ l ];
          var accept_buttons = video_trigger.querySelectorAll( 'input[type="button"]' );
          if( !!accept_buttons.length ) {
            for( var j=0; j < accept_buttons.length; j++ ) {
              var accept_button = accept_buttons[ j ];
              accept_button.addEventListener( "click", function() {
                var _trigger = this.parentElement.parentElement.parentElement;
                var data_type = _trigger.getAttribute( "data-type" );
                var source = "";
                _trigger.style.display = "none";
                _trigger.classList.remove("d-flex");
                source = get_source_url( data_type );
                var data_source = _trigger.getAttribute( 'data-source' );
                source = source.replace( "{SOURCE}", data_source );
                var video_layers = _trigger.parentElement.querySelectorAll(".video_layer");
                if( !!video_layers.length ) {
                  for( var k=0; k < video_layers.length; k++ ) {
                    var video_layer = video_layers[ k ];
                    video_layer.style.display = "block";
                    video_layer.querySelector( "iframe" ).setAttribute( "src", source );

                  }
                }
                _wrapper.style.backgroundImage = "";
                  _wrapper.style.height = "auto";
                var timeout = 100;
                setTimeout( function() {
                  iframeResize();
                }, timeout );
              })
            }
          }
        }
      }
    };
  }
}
document.ready( function() {
  allowVideosFromYouTube();
});
