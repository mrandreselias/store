function textValidater(element){
    
    if(!element.value || element.value.replace(" ","") == ''){
        element.className = 'form-control border border-danger';
        document.getElementById('btn-form').className = 'btn btn-block btn-info disabled'
        document.getElementById('btn-form').setAttribute('disabled','true');
    }else{
        element.className = 'form-control';
        document.getElementById('btn-form').className = 'btn btn-block btn-info'
        document.getElementById('btn-form').removeAttribute('disabled');
      
    }

}







