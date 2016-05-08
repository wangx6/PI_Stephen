(function($) {
    var Promotion = function() {
        var wrapWidth = 540,
            wrapHeight = 450;
        
        this.wrap = $('<div>')
            .addClass('pi__promotion__wrap')
            .css({
                width: wrapWidth + 'px',
                height: 'auto',
                color: '#fff',
                padding: '30px 0',
                borderTop: '1px solid #333',
                marginTop: '30px',
            });

        this.init();
        this.content = [];
    };

    Promotion.prototype.addBanner = function() {
        var block = $('<div>'),
            html;

        html = [
            '<div style="font-size:25px; font-weight:bold; color: #fff; line-height: 34px;">MACAU CASINO CLUB</div>',
            '<div style="color:yellow; margin-top:10px; font-weight:bold;">78 Aungier Street, Dublin 2. Tel +353 1 4755377</div>'
        ].join('');
        block.html(html).css({ textAlign: 'center' });
        this.wrap.append(block);
        return this;
    };

    Promotion.prototype.init = function() {
        var me = this; 

        this.addBanner()
            .addDescription()
            .addFooter();

        $('#pi__asian-irish-open__wrap').append(this.wrap);
    };

    Promotion.prototype.addDescription = function() {
        var block = $('<div>').css({ marginTop: '30px' }),
            listStyle = 'display:inline-block; color:yellow; margin-bottom: 10px; margin-left: 15px; padding: 0;',
            transListStyle = 'display:inline-block; color:green; margin-bottom: 2px; margin-left: 15px;',
            html;
        
        html = [
            '<div style="line-height:25px; color:#fff;">由78澳门赌马举办爱尔兰都柏林全华人扑克锦标赛于2015年8月24日晚上8点举行。参赛+登记费为€230 + €20. 仅1次重新买进€230。最后五强介时会保证能赢取总奖金10000现金。</div>',
            '<div style="color:green; margin-top: 10px; font-size: 13px;">',
            'Macau Casino Club Asian Open is now in Ireland.<br>',
            'Start at: 8pm, 24/08/2015<br>',
            'Entry + Reg:  €230 +  €20<br>',
            '</div>',
            '<div style="margin-top:10px; font-size:50px; font-weight:bold; line-height: 80px; color:yellow">€10,000</div>',
            '<div style="color:yellow;">GTD PRIZEPOOL</div>',
            '<ul style="color:yellow; list-style:none; padding:0; text-align:left; margin-bottom: 0;">',
                '<li style="' + listStyle + '">第一名 €4,000.00</li>',
                '<li style="' + listStyle + '">第二名 €2,500.00</li>',
                '<li style="' + listStyle + '">第三名 €2,000.00</li>',
                '<li style="' + listStyle + '">第四名 €1,000.00</li>',
                '<li style="' + listStyle + '">第五名 €500.00</li>',
            '</ul>',
            '<ul style="color:yellow; list-style:none; padding:0; text-align:left; font-size: 13px; margin-top:0px;">',
                '<li style="' + transListStyle + '">1st Prize €4,000.00</li>',
                '<li style="' + transListStyle + '">2nd Prize €2,500.00</li>',
                '<li style="' + transListStyle + '">3rd Prize €2,000.00</li>',
                '<li style="' + transListStyle + '">4th Prize €1,000.00</li>',
                '<li style="' + transListStyle + '">5th Prize €500.00</li>',
            '</ul>'
        ].join('');
        block.html(html).css({ textAlign: 'center' });
        this.wrap.append(block);
        return this;
    };

    Promotion.prototype.addFooter = function() {
        var block = $('<div>'),
            html;

        html = [
            '<div style="font-size:12px; color: yellow;">比赛时间于当天晚上8点开始本赌场会提供免费中式热食</div>',
            '<div style="font-size:12px; color: green;">Start at 8pm. Free Chinese food provided.</div>'
        ].join('');
        block.html(html).css({ textAlign: 'center' });
        this.wrap.append(block);
        return this;
    };

    Promotion.prototype.addClose = function() {
        var me = this,
            block = $('<div>'),
            regBtn,
            closeBtn;

        closeBtn = $('<div>')
            .html('Close')
            .css({
                textAlign: 'center',
                backgroundColor: '#666',
                padding: '10px',
                width: '100px',
                marginLeft: 'auto',
                marginRight: 'auto',
                marginTop: '20px',
                color: '#000',
                borderRadius: '5px',
                cursor: 'pointer',
                '-webkit-border-radius': '5px',
                '-moz-border-radius': '5px', 
            })
            .on('click', function() {
                me.wrap.fadeOut();
            });

        regBtn = $('<a>')
            .attr('href', 'user_register.php')
            .html('Register')
            .css({
                display: 'block',
                textAlign: 'center',
                backgroundColor: 'red',
                padding: '10px',
                width: '100px',
                marginLeft: 'auto',
                marginRight: 'auto',
                marginTop: '20px',
                color: '#fff',
                borderRadius: '5px',
                cursor: 'pointer',
                '-webkit-border-radius': '5px',
                '-moz-border-radius': '5px', 
            });

        block.append(regBtn).append(closeBtn);
        this.wrap.append(block);
        return this;
    };

    var p = new Promotion();

})(jQuery);