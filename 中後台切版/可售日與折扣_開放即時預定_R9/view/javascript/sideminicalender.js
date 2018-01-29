function Calendar(dom) {
        if (dom instanceof $) {
            var ym = dom.find('.ym')
            var dateBox = dom.find('.dates')
            var yBtnRight = dom.find('.year-right')
            var mBtnRight = dom.find('.month-right')
            var yBtnLeft = dom.find('.year-left')
            var mBtnLeft = dom.find('.month-left')
            if (!ym || !dateBox || !yBtnRight || !mBtnRight || !yBtnLeft || !mBtnRight) {
                return
            }

        } else {
            return
        }
        var cur = new Date()
        this.year = cur.getFullYear()
        this.month = cur.getMonth()
        this.date = cur.getDate()
        var that = this

        setDays(new Date(this.year,this.month,this.date))

        yBtnLeft.on('click',function(){
            dateBox.empty()
            setDays(new Date(--that.year,that.month,that.date))
        })
        mBtnLeft.on('click',function(){
            dateBox.empty()
            that.month--
            if(that.month < 0){
                that.month = 11
                that.year--
            }
            setDays(new Date(that.year,that.month,that.date))
        })
        yBtnRight.on('click',function(){
            dateBox.empty()
            setDays(new Date(++that.year,that.month,that.date))
        })
        mBtnRight.on('click',function(){
            dateBox.empty()
            that.month++
            if(that.month > 11){
                that.month = 0
                that.year++
            }
            setDays(new Date(that.year,that.month,that.date))
            console.log(that.year+'  '+that.month)
        })


        function setDays(dateObj){
            console.log(dateObj.toString())
            if(dateObj instanceof Date){
                var y = dateObj.getFullYear()
                var m = dateObj.getMonth()+1
                var d = dateObj.getDay()
                var date = dateObj.getDate()
                console.log('y'+y +'m'+m+'d'+d+'date'+date)
                //  console.log(new Date(2016,8,1).getDay())
            }
            ym.html(y+'年'+m+'月')

            var daysNum = new Date(y, m, 0).getDate()
            var divStr = ''
            var fstDay = new Date(y,m-1,1).getDay()
            console.log(fstDay)
            var lstMonthBegin = new Date(y,m-1,0).getDate() - fstDay +1

            //console.log('y:'+y+'m:'+m)
            for(var j = 0 ; j < fstDay;j++){
                divStr += "<div class = 'past'>"+lstMonthBegin+"</div>"
                lstMonthBegin++
            }
            for (var i = 1; i <= daysNum; i++) {
                divStr += ("<div class='date'><a href='#'>"+i+"</a></div>")
            }
            var dateDom = $(divStr)
            if(new Date().toString().slice(0,15) === dateObj.toString().slice(0,15)){
                dateDom.eq(date+fstDay-1).addClass('today')
            }
            dateBox.append(dateDom)
            $('.date').on('click',function(){
                var str = that.year+'年'+(that.month+1)+'月'+this.textContent+'日'
                //alert(str)
            })
            $('.past').on('click',function(){
                var str = that.year+'年'+that.month+'月'+this.textContent+'日'
                //alert(str)
            })
        }

    }