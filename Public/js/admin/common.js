/*

添加按钮操作
 */
$("#button-add").click(function(){
    var url = SCOPE.add_url;
    window.location.href=url;
});
/*
获取from表单数据
 */
$("#singcms-button-submit").click(function(){
    //获取数据
    var data = $("#singcms-form").serializeArray();
    postData = {};
    $(data).each(function(i){
       postData[this.name] = this.value; 
    });
    //将获取到的数据post给服务器
    var url = SCOPE.save_url;
    var jump_url = SCOPE.jump_url;
    $.post(url,postData,function(result){
        if(result.status == 1){
            //成功
            return dialog.success(result.message,jump_url);
            
        }else if(result.status == 0){
            //失败
           return  dialog.error(result.message);
        }
    },'JSON');
});