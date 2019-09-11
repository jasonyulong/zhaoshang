//文件MIME类型验证
$.validator.addMethod("accept", function(value, element, param) {
    // Split mime on commas in case we have multiple types we can accept
    var typeParam = typeof param === "string" ? param.replace(/\s/g, "").replace(/,/g, "|") : "image/*",
        optionalValue = this.optional(element),
        i, file;

    // Element is optional
    if (optionalValue) {
        return optionalValue;
    }

    if ($(element).attr("type") === "file") {
        // If we are using a wildcard, make it regex friendly
        typeParam = typeParam.replace(/\*/g, ".*");

        // Check if the element has a FileList before checking each file
        if (element.files && element.files.length) {
            for (i = 0; i < element.files.length; i++) {
                file = element.files[i];
                console.log(file.type)
                // Grab the mimetype from the loaded file, verify it matches
                if (!file.type.match(new RegExp( "\\.?(" + typeParam + ")$", "i"))) {
                    return false;
                }
            }
        }
    }

    // Either return true because we've validated each file, or because the
    // browser does not support element.files and the FileList feature
    return true;
}, $.validator.format("文件后缀不合法"));
//文件后缀验证
$.validator.addMethod("acceptRAR", function(value, element, param) {
    // Split mime on commas in case we have multiple types we can accept
    var typeParam = typeof param === "string" ? param.replace(/\s/g, "").replace(/,/g, "|") : "image/*",
        optionalValue = this.optional(element),
        i, file;

    // Element is optional
    if (optionalValue) {
        return optionalValue;
    }

    if ($(element).attr("type") === "file") {
        // If we are using a wildcard, make it regex friendly
        typeParam = typeParam.replace(/\*/g, ".*");

        // Check if the element has a FileList before checking each file
        if (element.files && element.files.length) {
            for (i = 0; i < element.files.length; i++) {
                file = element.files[i];
                console.log(file.name)
                // Grab the mimetype from the loaded file, verify it matches
                if (!file.name.match(new RegExp( "\\.?(" + typeParam + ")$", "i"))) {
                    return false;
                }
            }
        }
    }

    // Either return true because we've validated each file, or because the
    // browser does not support element.files and the FileList feature
    return true;
}, $.validator.format("文件后缀不合法."));
// 文件大小验证
$.validator.addMethod("fileSize", function(value,element,param) {
    var fileSize=element.files[0].size;
    var maxSize = param*1024*1024;
    if(fileSize > maxSize){
        return false;
    }else{
        return true;
    }
}, "请上传大小在{0}M一下的图片");
// 身份证号码验证
$.validator.addMethod("isID", function(value, element) {
    return this.optional(element) || isIdCardNo(value);
},"请正确输入您的身份证号码");
// 手机号码验证
$.validator.addMethod("isMobile", function(value, element) {
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1}))+d{8})$/;
    return this.optional(element) || (length == 11 && mobile.test(value));
}, "请正确填写您的手机号码");
// 电话号码验证
$.validator.addMethod("isTel", function(value, element) {
    var tel = /^d{3,4}-?d{7,9}$/; //电话号码格式010-12345678
    return this.optional(element) || (tel.test(value));
}, "请正确填写您的电话号码");
// 联系电话(手机/电话皆可)验证
$.validator.addMethod("isPhone", function(value,element) {
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1}))+d{8})$/;
    var tel = /^d{3,4}-?d{7,9}$/;
    return this.optional(element) || (tel.test(value) || mobile.test(value));
}, "请正确填写您的联系电话");
// 邮政编码验证
$.validator.addMethod("isZipCode", function(value, element) {
    var tel = /^[0-9]{6}$/;
    return this.optional(element) || (tel.test(value));
}, "请正确填写您的邮政编码");
//用户名验证
$.validator.addMethod("username", function(value, element) {
    var username = /^[a-z0-9_-]{3,16}$/;
    return this.optional(element) || (username.test(value));
}, "请正确填写您的用户名");
//用户名验证
$.validator.addMethod("password", function(value, element) {
    var password = /^[a-z0-9_-]{6,18}$/;
    return this.optional(element) || (password.test(value));
}, "请正确填写您的密码");
