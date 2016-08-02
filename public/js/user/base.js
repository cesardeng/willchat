var Base = function() {
    // ajax 提交表单
    var initAjaxForm = function() {
        // 表单默认以AJAX提交并提示处理结果，提升用户体验，如果不要AJAX提交则在form添加no-ajax类
        $("form").not('.validate').submit(function(event) {
            var url = $(this).attr('action');
            var submitData = $(this).serialize();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: submitData,
            }).done(function(data, textStatus, jqXHR) {
                var formItem = $('form');
                // 清除旧的错误提示
                formItem.find('.alert').remove();
                this.success(data.info);
                if (data.url) {
                    setTimeout(function() {
                        top.location.href = data.url
                    }, 2000);
                } else {
                    setTimeout(function() {
                        top.location.reload()
                    }, 2000);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                var errors = jqXHR.responseJSON;
                var formItem = $('form');
                // 清除旧的错误提示
                formItem.find('.alert').remove();
                $.each(errors, function(index, val) {
                    var errorMsg = val[0];
                    var errorAlert = $("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button><strong>验证错误!</strong> " + errorMsg + " </div>");
                    formItem.prepend(errorAlert);
                });
            }).always(function() {
                console.log("complete");
            });
            return false;
        });
    };

    //图片弹出预览
    var initImgpreview = function() {
        $('img.preview-small,.thumbnail img').click(function(event) {
            var imgSrc = $(this).attr('src');
            var imgItem = "<img src='" + imgSrc + "' height='300'/>";
            layer.open({
                type: 1,
                title: false,
                fix: false,
                shadeClose: true,
                offset: ['150px', ''],
                area: ['auto', 'auto'],
                content: imgItem
            });
        });
    };

    var initCheckAll = function() {
        //全选的实现
        $(".group-checkable").click(function() {
            $(".ids").prop("checked", this.checked);
            $('.group-checkable,.ids').uniform()
        });
        $(".ids").click(function() {
            var option = $(".ids");
            option.each(function(i) {
                if (!this.checked) {
                    $(".group-checkable").prop("checked", false);
                    $('.group-checkable,.ids').uniform()
                    return false;
                } else {
                    $(".group-checkable").prop("checked", true);
                    $('.group-checkable,.ids').uniform()
                }
            });
        });
    };

    //ajax get请求
    $('.ajax-get').click(function() {
        var target;
        var that = this;
        if ($(this).hasClass('confirm')) {
            if (!confirm('确认要执行该操作吗?')) {
                return false;
            }
        }
        if ((target = $(this).attr('href')) || (target = $(this).attr('url'))) {
            $.get(target).success(function(data) {
                if (data.status == 1) {
                    if (data.url) {
                        this.success(data.info + ' 页面即将自动跳转~');
                    } else {
                        this.success(data.info);
                    }
                    setTimeout(function() {
                        if (data.url) {
                            location.href = data.url;
                        } else {
                            location.reload();
                        }
                    }, 1500);
                } else {
                    this.error(data.info);
                    setTimeout(function() {
                        if (data.url) {
                            location.href = data.url;
                        }
                    }, 1500);
                }
            });
        }
        return false;
    });

    //ajax post submit请求
    $('.ajax-post').click(function() {
        var target, query, form;
        var target_form = $(this).attr('target-form');
        var that = this;
        var nead_confirm = false;
        if (($(this).attr('type') == 'submit') || (target = $(this).attr('href')) || (target = $(this).attr('url'))) {
            form = $('.' + target_form);
            if ($(this).attr('hide-data') === 'true') { //无数据时也可以使用的功能
                form = $('.hide-data');
                query = form.serialize();
            } else if (form.get(0) == undefined) {
                return false;
            } else if (form.get(0).nodeName == 'FORM') {
                if ($(this).hasClass('confirm')) {
                    if (!confirm('确认要执行该操作吗?')) {
                        return false;
                    }
                }
                if ($(this).attr('url') !== undefined) {
                    target = $(this).attr('url');
                } else {
                    target = form.get(0).action;
                }
                query = form.serialize();
            } else if (form.get(0).nodeName == 'INPUT' || form.get(0).nodeName == 'SELECT' || form.get(0).nodeName == 'TEXTAREA') {
                form.each(function(k, v) {
                    if (v.type == 'checkbox' && v.checked == true) {
                        nead_confirm = true;
                    }
                });
                if (nead_confirm && $(this).hasClass('confirm')) {
                    if (!confirm('确认要执行该操作吗?')) {
                        return false;
                    }
                }
                query = form.serialize();
            } else {
                if ($(this).hasClass('confirm')) {
                    if (!confirm('确认要执行该操作吗?')) {
                        return false;
                    }
                }
                query = form.find('input,select,textarea').serialize();
            }
            $(that).addClass('disabled').attr('autocomplete', 'off').prop('disabled', true);
            $.post(target, query).success(function(data) {
                if (data.status == 1) {
                    if (data.url) {
                        this.success(data.info + ' 页面即将自动跳转~');
                    } else {
                        this.success(data.info);
                    }
                    setTimeout(function() {
                        $(that).removeClass('disabled').prop('disabled', false);
                        if (data.url) {
                            location.href = data.url;
                        } else {
                            location.reload();
                        }
                    }, 1500);
                } else {
                    this.error(data.info);
                    setTimeout(function() {
                        $(that).removeClass('disabled').prop('disabled', false);
                        if (data.url) {
                            location.href = data.url;
                        }
                    }, 1500);
                }
            });
        }
        return false;
    });

    // 侧栏高亮,rewrite URL模式匹配
    var highlightSidebar = function() {
        //侧栏菜单中的全部有链接菜单项
        var sidebarLinks = $(".sidebar-menu").find('.treeview a');

        if (sidebarLinks.length > 0) {
            //当前页面URL
            var url = document.URL;

            var activeMenuItem = $(".sidebar-menu .treeview").find("a[href='" + url + "']").first();

            if (activeMenuItem) {
                //保存当前高亮菜单项 index 到 cookie 中
                var menuIndex = sidebarLinks.index(activeMenuItem);

                activeMenuItem.parents(".treeview").addClass("active");
                activeMenuItem.parent('li').addClass("active");

                Cookies.set('menuindex', menuIndex);
            } else {
                //侧栏中没有与当前 URL 匹配的，则高亮上一次高亮的项
                var menuIndex = Cookies.get('menuindex');

                activeMenuItem = sidebarLinks.eq(menuIndex);

                activeMenuItem.parents(".treeview").addClass("active");
                activeMenuItem.parent('li').addClass("active");
            }
        }
    };

    // 操作成功提示
    var success = function(msg) {
        top.layer.msg(msg, {
            icon: 1
        });
    };

    // 操作失败提示
    var error = function(msg) {
        top.layer.msg(msg, {
            icon: 2,
            shift: 6
        });
    };

    // 一般提示
    var info = function(msg) {
        top.layer.msg(msg);
    };

    // 操作确认弹窗
    var confirm = function(msg, callback) {
        top.layer.confirm(msg, {icon:3,title:'操作提示'}, function(index){
            callback();
            top.layer.close(index);
        });
    };

    // 显示 loading 提示层
    var showLoading = function() {
        this.loadingIndex = top.layer.load();
    };

    // 隐藏 loading 提示层
    var hideLoading = function() {
        top.layer.close(this.loadingIndex);
    };

    return {
        initNormalPage: function() {
            initAjaxForm();
            initImgpreview();
            initCheckAll();
            highlightSidebar();
        },
        initDialogPage: function() {
            initAjaxForm();
            initCheckAll();
        },
        success: success,
        error: error,
        info: info,
        confirm: confirm,
        showLoading: showLoading,
        hideLoading: hideLoading
    }
}();

jQuery(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});