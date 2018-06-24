// Display random quote

jQuery(function ($) {
  $('#get-quote-btn').on('click', function (e) {
    e.preventDefault();
    $.ajax({
      method: 'GET',
      url: api_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',

      beforeSend: function (xhr) {
        xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
      },

      success: function (data) {

        //console.log(data);

        var quote = data[0].content.rendered;
        var author = data[0].title.rendered;
        var quoteSrc = data[0]._qod_quote_source;
        var quoteLink = data[0]._qod_quote_source_url;

        $('.random-quote').html(quote);



        if (quoteLink && quoteSrc) {

          $('.quote-link').html('- ' + author + ', ' + ' <a target="_blank" href="' + quoteLink + '">' + quoteSrc + '</a>');

        } else if ((quoteLink) && (quoteSrc === '')) {
          $('.quote-link').html('- ' + author + ',' + quoteLink);

        } else if ((quoteSrc) && (quoteLink === '')) {
          $('.quote-link').html('- ' + author + ', ' + '<strong>' + quoteSrc + '</strong>');

        } else {
          $('.quote-link').text('- ' + author);

        }

      },
      cache: true
    });
  });





})


// Quote submissions 


jQuery(function ($) {

  $('#submitQuote').on('click', function (event) {

    event.preventDefault();

    var author = $('#quote-author').val();
    var quote = $('#the-quote').val();
    var quoteSource = $('#quote-source').val();
    var quoteUrl = $('#quote-url').val();



    var quotesInfo = {
      title: author,
      content: quote,
      _qod_quote_source: quoteSource,
      _qod_quote_source_url: quoteUrl,
      status: 'pending'

    };

    $.ajax({
        method: 'POST',
        url: api_vars.rest_url + 'wp/v2/posts/',
        data: quotesInfo,
        beforeSend: function (xhr) {
          xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
        },
      }).done(function () {
       // $('#form-container').hide();
       // $('#success-message').show();
        // $('#success-message').text('jquery text');
        alert('your quote has been submitted');
      })
      .fail(function () {
        alert('your quote could not be submitted'); // if something goes wrong
      });

    // reset the form 

    $('#quote-author').val('');
    $('#the-quote').val('');
    $('#quote-source').val('');
    $('#quote-url').val('');
  });



});