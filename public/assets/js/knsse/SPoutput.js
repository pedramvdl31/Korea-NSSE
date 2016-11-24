$(document).ready(function(){
    Function.prototype.bind = Function.prototype.bind || function (thisp) {
        var fn = this;
        return function () {
            return fn.apply(thisp, arguments);
        };
    };
    output.Init();
    setTimeout(function(){ request.make_doc() }, 500);
});

output = {
  Init: function(){


    var chart = c3.generate({
      size: {
          height: 200,
          width: 530
      },
      data: {
          columns: [
              ['data1', 30, 20, 10, 40, 15, 25, 50, 10, 25, 25],
              ['data2', 10, 10, 12, 40, 35, 25, 50, 20, 15, 50]
          ]
      },point: {
        r: function (d) {
          return d.id === 'data2' ? 5 : 3;
        }
      },
      axis: {
          x: {
            show: false,
            type: 'category',
            categories: ['', '', '', '', '', '', '', '', '']
          },
          y: {
              max: 50,
              min: 10,
              tick: {
                format: function (d) {if (d != "15" && d != "25" && d != "35" && d != "45" ) return d}
              }
          }
      },
      tooltip: {
          show: false
      },
      legend: {
        show: false
      },
      grid: {
        y: {
            show: true
        }
      }
    });


  }
};

request = {
  make_doc: function() {

    var token = $('meta[name=csrf-token]').attr('content');
    var bdata =  $(document).find("section").html();
    $.post(
      '/save-as-image',
      {
        "_token": token,
        "hdata": bdata
      },
      function(result){
        var status = result.status;

        switch(status) {

        }
      }
      );
  }
};
