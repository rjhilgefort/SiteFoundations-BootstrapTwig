//https://github.com/ifightcrime/bootstrap-growl
function growl (message_type, message) {
  //types: info, warning, danger, success
  if(message_type == 'info'){
    message = '<span class="label label-info"><i class="icon-info-sign icon-white"></i> Info</span> ' + message;
  }else if(message_type == 'warning'){
    message = '<span class="label label-warning"><i class="icon-warning-sign icon-white"></i> Warning</span> ' + message;
  }else if(message_type == 'error'){
    message = '<span class="label label-important"><i class="icon-exclamation-sign icon-white"></i> Error</span> ' + message;
  }else if(message_type == 'success'){
    message = '<span class="label label-success"><i class="icon-ok-sign icon-white"></i> Success</span> ' + message;
  }else{
    //do nothing, maybe growl to notify that the function was used incorrectly and then return
  }

  //perform growl
  $.bootstrapGrowl(message, {
    type: message_type,
    //top_offset: 385,
    top_offset: 5,
    align: 'right',
    width: 250,
    delay: 6000,
    allow_dismiss: true,
    stackup_spacing: 10
  });
}

//made into a function since this will need to be called 
//  every time jTable loads records
function tooltipInit(){
  $('[rel=tooltip]').tooltip({
    delay: { show: 750, hide: 0 }
  });
}