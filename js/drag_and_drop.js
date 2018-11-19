
var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();

var $form = $('.box');
if (isAdvancedUpload) {
  $form.addClass('has-advanced-upload');
}

if (isAdvancedUpload) {

  var droppedFiles = false;

  $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
  })
  .on('dragover dragenter', function() {
    $form.addClass('is-dragover');
  })
  .on('dragleave dragend drop', function() {
    $form.removeClass('is-dragover');
  })
  .on('drop', function(e) {
    droppedFiles = e.originalEvent.dataTransfer.files;
  });

}

if (isAdvancedUpload) {
  e.preventDefault();

  var ajaxData = new FormData($form.get(0));

  if (droppedFiles) {
    $.each( droppedFiles, function(i, file) {
      ajaxData.append( $input.attr('name'), file );
    });
  }

  $.ajax({
    url: $form.attr('action'),
    type: $form.attr('method'),
    data: ajaxData,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    complete: function() {
      $form.removeClass('is-uploading');
    },
    success: function(data) {
      $form.addClass( data.success == true ? 'is-success' : 'is-error' );
      if (!data.success) $errorMsg.text(data.error);
    },
    error: function() {
      // Log the error, show an alert, whatever works for you
    }
  });
}.on('drop', function(e) { // when drag & drop is supported
  droppedFiles = e.originalEvent.dataTransfer.files;
  $form.trigger('submit');
});

// ...

$input.on('change', function(e) { // when drag & drop is NOT supported
  $form.trigger('submit');
});

var $input    = $form.find('input[type="file"]'),
    $label    = $form.find('label'),
    showFiles = function(files) {
      $label.text(files.length > 1 ? ($input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
    };

// ...

.on('drop', function(e) {
  droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
  showFiles( droppedFiles );
});

//...

$input.on('change', function(e) {
  showFiles(e.target.files);
});