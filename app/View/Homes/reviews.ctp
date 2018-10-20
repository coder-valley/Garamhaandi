<style>
    .imagedash {
        width: 50%;
    }
    .leftside {
        text-align: center;
    }
    .rightside {
        text-align: right;
    }
    hr {
        width: 95%;
    }
</style>




<section>
    <div class="container">
        <div class="row m-t-40 m-b-20" style="padding-top:16px">
            <div class="col-md-12 aboutheadmain m-b-50 headimage">
                <h3 class="text-center">Dashboard</h3>
                <p class="text-center">Welcome to GaramHaandi</p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 aboutheadmain m-b-50 leftside">
                        <img class="imagedash img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg">
                        <div class="row">
                            <b>Sumila Kumari</b>
                            <br>

                            <div class="btn-group col-md-12">
                                <button type="button" class="btn buttondashboard">Profile</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Order Details</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Subscriptions</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Reviews</button>
                                <br>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9 aboutheadmain m-b-50">
                        <div class="row" style="padding-top: 0px!important">
                            <div class="col-md-12" style="padding-left: 3%">
                                <span style="font-size: 30px; ">Feedback</span>
                            </div>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>




<!-- Star rating js start -->

<script type="text/javascript">
    // Starrr plugin (https://github.com/dobtco/starrr)
    var __slice = [].slice;

    (function($, window) {
        var Starrr;

        Starrr = (function() {
            Starrr.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, value) {}
            };

            function Starrr($el, options) {
                var i, _, _ref,
                    _this = this;

                this.options = $.extend({}, this.defaults, options);
                this.$el = $el;
                _ref = this.defaults;
                for (i in _ref) {
                    _ = _ref[i];
                    if (this.$el.data(i) != null) {
                        this.options[i] = this.$el.data(i);
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on('mouseover.starrr', 'span', function(e) {
                    return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('mouseout.starrr', function() {
                    return _this.syncRating();
                });
                this.$el.on('click.starrr', 'span', function(e) {
                    return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('starrr:change', this.options.change);
            }

            Starrr.prototype.createStars = function() {
                var _i, _ref, _results;

                _results = [];
                for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                    _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                }
                return _results;
            };

            Starrr.prototype.setRating = function(rating) {
                if (this.options.rating === rating) {
                    rating = void 0;
                }
                this.options.rating = rating;
                this.syncRating();
                return this.$el.trigger('starrr:change', rating);
            };

            Starrr.prototype.syncRating = function(rating) {
                var i, _i, _j, _ref;

                rating || (rating = this.options.rating);
                if (rating) {
                    for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                    }
                }
                if (rating && rating < 5) {
                    for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                    }
                }
                if (!rating) {
                    return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                }
            };

            return Starrr;

        })();
        return $.fn.extend({
            starrr: function() {
                var args, option;

                option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var data;

                    data = $(this).data('star-rating');
                    if (!data) {
                        $(this).data('star-rating', (data = new Starrr($(this), option)));
                    }
                    if (typeof option === 'string') {
                        return data[option].apply(data, args);
                    }
                });
            }
        });
    })(window.jQuery, window);

    $(function() {
        return $(".starrr").starrr();
    });

    $(document).ready(function() {

        $('#stars').on('starrr:change', function(e, value) {
            $('#count').html(value);
        });

        $('#stars-existing').on('starrr:change', function(e, value) {
            $('#count-existing').html(value);
        });
    });
</script>

<!-- Star rating js end --><style>
    .imagedash {
        width: 50%;
    }
    .leftside {
        text-align: center;
    }
    .rightside {
        text-align: right;
    }
    hr {
        width: 95%;
    }
</style>




<section>
    <div class="container">
        <div class="row m-t-40 m-b-20" style="padding-top:16px">
            <div class="col-md-12 aboutheadmain m-b-50 headimage">
                <h3 class="text-center">Dashboard</h3>
                <p class="text-center">Welcome to GaramHaandi</p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 aboutheadmain m-b-50 leftside">
                        <img class="imagedash img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg">
                        <div class="row">
                            <b>Sumila Kumari</b>
                            <br>

                            <div class="btn-group col-md-12">
                                <button type="button" class="btn buttondashboard">Profile</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Order Details</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Subscriptions</button>
                                <br>
                                <button type="button" class="btn buttondashboard">Reviews</button>
                                <br>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9 aboutheadmain m-b-50">
                        <div class="row" style="padding-top: 0px!important">
                            <div class="col-md-12" style="padding-left: 3%">
                                <span style="font-size: 30px; ">Feedback</span>
                            </div>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3" style="padding-left: 5%">
                                    <h4>Uncles Treat</h4>
                                    <br>
                                    <div class="row lead" style="padding-left: 9%">
                                        <div id="stars" class="starrr" data-rating='4'></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span>17-08-2017</span>
                                    <br>
                                    <span>19:52 P.M</span>
                                </div>
                                <div class="col-md-7" style="padding-left: 6%">
                                    <p>Lore ipsumdkjdkbdskbjskjbkjsksksckjsckcsksackjbasckjasckjkjnaskascjna sclaudezdddzcdcascdcadcadcdcdcadcdcdcd</p>
                                    <br>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>




<!-- Star rating js start -->

<script type="text/javascript">
    // Starrr plugin (https://github.com/dobtco/starrr)
    var __slice = [].slice;

    (function($, window) {
        var Starrr;

        Starrr = (function() {
            Starrr.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, value) {}
            };

            function Starrr($el, options) {
                var i, _, _ref,
                    _this = this;

                this.options = $.extend({}, this.defaults, options);
                this.$el = $el;
                _ref = this.defaults;
                for (i in _ref) {
                    _ = _ref[i];
                    if (this.$el.data(i) != null) {
                        this.options[i] = this.$el.data(i);
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on('mouseover.starrr', 'span', function(e) {
                    return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('mouseout.starrr', function() {
                    return _this.syncRating();
                });
                this.$el.on('click.starrr', 'span', function(e) {
                    return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                });
                this.$el.on('starrr:change', this.options.change);
            }

            Starrr.prototype.createStars = function() {
                var _i, _ref, _results;

                _results = [];
                for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                    _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                }
                return _results;
            };

            Starrr.prototype.setRating = function(rating) {
                if (this.options.rating === rating) {
                    rating = void 0;
                }
                this.options.rating = rating;
                this.syncRating();
                return this.$el.trigger('starrr:change', rating);
            };

            Starrr.prototype.syncRating = function(rating) {
                var i, _i, _j, _ref;

                rating || (rating = this.options.rating);
                if (rating) {
                    for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                    }
                }
                if (rating && rating < 5) {
                    for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                        this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                    }
                }
                if (!rating) {
                    return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                }
            };

            return Starrr;

        })();
        return $.fn.extend({
            starrr: function() {
                var args, option;

                option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var data;

                    data = $(this).data('star-rating');
                    if (!data) {
                        $(this).data('star-rating', (data = new Starrr($(this), option)));
                    }
                    if (typeof option === 'string') {
                        return data[option].apply(data, args);
                    }
                });
            }
        });
    })(window.jQuery, window);

    $(function() {
        return $(".starrr").starrr();
    });

    $(document).ready(function() {

        $('#stars').on('starrr:change', function(e, value) {
            $('#count').html(value);
        });

        $('#stars-existing').on('starrr:change', function(e, value) {
            $('#count-existing').html(value);
        });
    });
</script>

<!-- Star rating js end -->