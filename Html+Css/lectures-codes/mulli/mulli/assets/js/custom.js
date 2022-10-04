AOS.init({
   disable: 'phone',
   duration: 800,
   once: true
});

$(function () {
   var lastScrollTop = 0, delta = 15;
   $(window).scroll(function (event) {
      var st = $(this).scrollTop();

      if (st > 150) {
         $("nav").css("background", "#fff");
      } else {
         $("nav").css("background", "transparent");
      }
      if (Math.abs(lastScrollTop - st) <= delta)
         return;
      if ((st > lastScrollTop) && (lastScrollTop > 0)) {
         $("nav").css("top", "-80px");
         $('.full_dropdown').hide();
      } else {
         $("nav").css("top", "0px");
         $('.full_dropdown').removeAttr('style');
      }
      lastScrollTop = st;
   });
});

(function (win) {
   var zp = win.zp || {};
   win.zp = zp;
   zp.json = {
      replacer: function (match, pIndent, pKey, pVal, pEnd) {
         var key = '<span style="color: #79e7f4;">"';
         var val = '<span style="color: #bc76e2;">';
         var str = '<span style="color: #b0ec6d;">';
         var r = pIndent || '';
         if (pKey)
            r = r + key + pKey.replace(/[": ]/g, '') + '"</span>: ';
         if (pVal)
            r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
         return r + (pEnd || '');
      },
      pretty: function (obj) {
         var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
         return JSON.stringify(obj, null, 3)
            .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
            .replace(/</g, '&lt;').replace(/>/g, '&gt;')
            .replace(jsonLine, zp.json.replacer);
      }
   };
})(window);

var identity_account = {
   "appSecret": "9bb31d270f20...",
   "userSecret": "RsBWHEIRXsFQ...",
   "sync": true
};
$('.identity_account').html(zp.json.pretty(identity_account));

var balance = {
   "appSecret": "9bb31d270f20...",
   "userSecret": "RsBWHEIRXsFQ...",
   "sync": true,
   "accountID": "h7Fee6GogM+h..."
};
$('.balance').html(zp.json.pretty(balance));

var transactions = {
   "appSecret": "9bb31d270f20...",
   "userSecret": "RsBWHEIRXsFQ...",
   "sync": true,
   "fromDate": "2020-03-10",
   "toDate": "2020-03-12",
   "accountID": "h7Fee6GogM+h..."
};
$('.transactions').html(zp.json.pretty(transactions));

var create_transfer = {
   "appSecret": "9bb31d270f20...",
   "userSecret": "RsBWHEIRXsFQ...",
   "sync": true,
   "amount": 100,
   "senderID": "h7Fee6GogM+h...",
   "receiverID": "12jedie6GogM..."
};
$('.create_transfer').html(zp.json.pretty(create_transfer));