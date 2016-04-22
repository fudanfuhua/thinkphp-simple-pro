!function() {
	function dashboard() {
		
		//API接口
		this.requestURL 	= {
			ignore: $.getAppURL('/dashboard/ignoreQuery'),
			list: $.getAppURL('/dashboard/listQuery'),
			card: $.getAppURL('/dashboard/cardQuery'),
			page: $.getAppURL('/dashboard/pageQuery')
		};

		//接口请求(Func)
		this.AjaxEvent();

		//DOM渲染(Func)
		this.DomRender();

		//DOM事件处理
		this.DomEvent();

		//页面初始化
		this.initPage();
	};

	dashboard.prototype.initPage = function() {

		var _this = this;

		$(function() {
			//顶部选项卡初始化
			_this.pageAjax();

			//底部列表初始化
			_this.cardAjax(1);             //这里默认第一个选项卡的cardid为 “1”

			//底部时间轴初始化
			_this.listAjax(1);			   //这里默认第一个列表项的listid为 “1”
		});
	};

	dashboard.prototype.DomEvent = function() {
		var _this = this;

		//卡片事件
		$('.main-card').on('click', '.card', function(e) {
			console.log(this);
			var cardid = $(this).data('cardid');
			$('.card.active').removeClass('active');
			$(this).addClass('active');

			_this.cardAjax(cardid);
			_this.listAjax(1);
		});

		//列表事件
		$('.info-list').on('click', 'a', function(e) {
			var listid = $(e.target).data('listid');
			$("a.active").removeClass('active');
			$(e.target).addClass('active');

			_this.listAjax(listid);
		});

		//"忽略"点击事件
		$('.timeline').on('click', '.ignore-icon', function(e) {
			var $ignoreEle	= $(e.target);
			var infoid 		= $(e.target).data('infoid');

			_this.ignoreAjax($ignoreEle, infoid);
		});

		//"忽略"显示事件
		$('.info-box').bind('mouseover', function(e) {
			$(this).addClass('active');
			$('.first-box .circle-icon').removeClass("active");
		});

		$('.info-box').bind('mouseleave', function(e) {
			$(this).removeClass('active');
			$('.first-box .circle-icon').addClass("active");
		});
	};

	dashboard.prototype.AjaxEvent = function() {
		var _this = this;

		//页面加载load事件(Ajax)
		this.pageAjax = function() {
			$.post(_this.requestURL.page, {page: 'dashboard'}, function(data) {
				if (data.flag == 0) {
					_this.cardRender(data.data);
					return;
				}
				alert("feach fail");
			}, 'json');
		};

		//"忽略"点击事件(Ajax)
		this.ignoreAjax = function($ignoreEle, infoid) {
			$.post(_this.requestURL.ignore, { ignoreid: infoid }, function(data) {
				if (data.flag == 0) {
					$ignoreEle.parents('.info-box').remove();
					//更新数量显示
					var reduceNum = $('.list-item.active').find('.list-icon').text();
					$('.list-item.active').find('.list-icon').text( Number(reduceNum) - 1 );
					return;
				}
				alert("remove fail");
			}, 'json');
		};

		//列表事件(Ajax)
		this.listAjax = function(listid) {
			$.post(_this.requestURL.list, { listid: listid }, function(data) {
				if (data.flag == 0) {
					//DOM render
					_this.infoRender(data.data);
					_this.DomEvent();
					return;
				}
				alert("fatch fail");
			}, 'json');
		};

		//卡片事件(Ajax)
		this.cardAjax = function(cardid) {
			$.post(_this.requestURL.card, { cardid: cardid }, function(data) {
				if (data.flag == 0) {
					//DOM render
					_this.listRender(data.data);
					return;
				}
				alert("fatch fail");
			}, 'json');
		};
	};

	dashboard.prototype.DomRender = function() {

		/*
			时间轴
		*/
		this.infoRender = function(data) {
			var tpldata 	= { list: data },
				tpl 		= $("#timeline-tpl").html();

			//时间轴head渲染
			$('.info-title').text( $('.info-list a.active').children('.list-text').text() );
			$('.info-num').text( $('.info-list a.active').children('.list-icon').text() );

			//时间轴body渲染
			$('.timeline').find('.info-box').remove();      //清空历史数据
			$('.timeline').append( _.template(tpl)(tpldata) );
		};

		/*
			列表项
		*/
		this.listRender = function(data) {	
			var tpldata 	= { list: data },
				tpl 		= $("#list-tpl").html();

			$('.info-list ul').empty().append( _.template(tpl)(tpldata) );
		};

		/*
			选项卡
		*/
		this.cardRender = function(data) {
			var tpldata 	= { list: data },
			 		tpl 	= $("#card-tpl").html();

			$('.main-card').append( _.template(tpl)(tpldata) );
		};
	};

	new dashboard();
}(window, $);