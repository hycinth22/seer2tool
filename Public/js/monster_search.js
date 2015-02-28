function lookup(by,value,ai)
{
    if (value ==''){
        alert('不能为空！');
        $('#find').focus();
        return false;
    }
    window.location = '/monsterinfo/data/'+ by +'/' + value + '/ai/' + ai ;
    return true;
}
function setSearchTip(){
    $('#find').val('请输入ID或名称');
}
function isSearchTip(text){
    return text=='请输入ID或名称';
}
$('#find').focus(function(){
    if (isSearchTip($(this).val())){
        $(this).val('');
    }
    $(this).css('color','black');
});
$('#find').blur(function(){
    if(!$(this).val()){
        if( $('#lastfind').val() ){
            $(this).val( $('#lastfind').val() );
        }else{
            setSearchTip();
        }
        $(this).css('color','#CDCDCD');
    }
});
$('#search').click(function(){
    if(isSearchTip( $('#find').val())){
        $('#find').val('');
        }
    lookup('auto', $('#find').val(), ($('#ai').prop('checked')?'1':'0') ); 
});
$('a.star').click(function(){
    $(this)[0].href += '/ai/' + ($('#ai').prop('checked')?'1':'0');
    return true;
});
$("#find").keydown(function(event){
     if (event.keyCode==13){
        $('#search').click();
     }
});