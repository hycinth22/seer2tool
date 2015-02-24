function lookup(by,value,ai)
{
    if (value ==''){
        alert('不能为空！');
        $('#find').focus();
        return false;
    }
    var url = '/monsterinfo/data/'+ by +'/' + value;
    if (ai)
    url = url + '?ai=1';
    window.location = url ;
}
$('#find').ready(function(){
    $('#find').css('color','#CDCDCD');
})
$('#find').focus(function(){
    $('#find').val('');
    $('#find').css('color','black');
})
$('#find').blur(function(){
    if(!$('#find').val()){
        $('#find').val('请输入ID或名称');
        $('#find').css('color','#CDCDCD');
        }
})
$('#search').click(function(){
    if($('#find').val()=='请输入ID或名称'){
        $('#find').val('');
        }
    lookup('auto', $('#find').val(), $('#ai').prop('checked')); 
})
