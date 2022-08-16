@extends('layout.layout')
@section('content')

    <head>
        <title>Booking.CHS.RMUTI</title>
        <link id="pagestyle" href="./assets/css/home.css" rel="stylesheet" />

      
    </head>

    <body class="sidebar-mini layout-fixed" style="height: auto; background-color:#cce6ff;">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class=" navbar-logo" href=""><img src="/assets/icon/rmuti.ico.png" width="19" height="30"> ระบบจองครุภัณฑ์  สาขา เคมีประยุกต์ คณะวิทยาศาสตร์และศิลปศาสตร์ </a>
            
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item ">
                        <a class="nav-link " href=" /home">หน้าเเรก</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/booking">E-Booking</a>
                    </li>
                   {{--  <li class="nav-item ">
						<a class="nav-link" href="/bookingConfirm">เช็คสถานะ</a>
					</li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/singin">ล็อคเอาท์</a>
                    </li>
                </ul>
            </div>
            
        </nav>
           

           
            
                <!-- Main content -->
                <div style="background-color:#cce6ff;">
                    <div class="row">
                    <div class="col-xs-6 col-md-3 form-group"></div>
                    <div class="col-xs-6 col-md-6 form-group"></div>
                <section class="content" style="padding-top: 5px">
                    

                    <div style="padding-top: 20px" class="container-fluid">
                        <div style="margin-bottom: 50px;" class="row">

                        </div>
                      
                                <div class="card-body" style="background-color:#0e0c4f28;">
                                    <form
                                        action="http://demo-laravel-appointments.quickadminpanel.com/admin/appointments/10"
                                        method="POST" enctype="multipart/form-data">
                                    
                                        <input type="hidden" name="_token"
                                            value="ECMMdWt5NLyeLxMIEApavf9Pjaejy4iGreousVks">
                                    
                                        <div class="form-group ">
                                           

                                        <div class="form-group ">
                                            <label for="comments">รายละเอียดการจอง</label>
                                            <textarea id="comments" name="comments" class="form-control "></textarea>
                                            <p class="helper-block">

                                            </p>
                                            <label for="comments">รออนุมัติ</label>
                                        </div> 

                                         
                                             
                                    </form>


                                </div>
                </section>
            </div>
            <div class="col-xs-6 col-md-3 form-group"></div>
                </div>
            </div>
                <!-- /.content -->
            </div>


            <form id="logoutform" action="http://demo-freelancer-crm.quickadminpanel.com/logout" method="POST"
                style="display: none;" >
                <input type="hidden" name="_token" value="PwOtZEQuVE8QU1ebwM3FQhoICPnLTDikrVUdlg4d">
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
        <script src="http://demo-freelancer-crm.quickadminpanel.com/js/main.js"></script>
        <script>
            $(function() {
                let copyButtonTrans = 'Copy'
                let csvButtonTrans = 'CSV'
                let excelButtonTrans = 'Excel'
                let pdfButtonTrans = 'PDF'
                let printButtonTrans = 'Print'
                let colvisButtonTrans = 'Column visibility'

                let languages = {
                    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
                };

                $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                    className: 'btn'
                })
                $.extend(true, $.fn.dataTable.defaults, {
                    language: {
                        url: languages['en']
                    },
                    columnDefs: [{
                        orderable: false,
                        className: 'select-checkbox',
                        targets: 0
                    }, {
                        orderable: false,
                        searchable: false,
                        targets: -1
                    }],
                    select: {
                        style: 'multi+shift',
                        selector: 'td:first-child'
                    },
                    order: [],
                    scrollX: true,
                    pageLength: 100,
                    dom: 'lBfrtip<"actions">',
                    buttons: [{
                            extend: 'copy',
                            className: 'btn-default',
                            text: copyButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'csv',
                            className: 'btn-default',
                            text: csvButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excel',
                            className: 'btn-default',
                            text: excelButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdf',
                            className: 'btn-default',
                            text: pdfButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'print',
                            className: 'btn-default',
                            text: printButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'colvis',
                            className: 'btn-default',
                            text: colvisButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            }
                        }
                    ]
                });

                $.fn.dataTable.ext.classes.sPageButton = '';
            });
        </script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 2px solid #ffffff;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }
        </style>
        <script>
            // ---------Responsive-navbar-active-animation-----------
function test() {
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click", "li", function(e) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}
$(document).ready(function() {
    setTimeout(function() {
        test();
    });
});
$(window).on('resize', function() {
    setTimeout(function() {
        test();
    }, 500);
});
$(".navbar-toggler").click(function() {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function() {
        test();
    });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($) {
    // Get current path and find target link
    var path = window.location.pathname.split("/").pop();

    // Account for home page with empty path
    if (path == '') {
        path = 'index.html';
    }

    var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
    // Add active class to target link
    target.parent().addClass('active');
});
            /*!
             * AdminLTE v3.0.0-alpha.2 (https://adminlte.io)
             * Copyright 2014-2018 Abdullah Almsaeed <abdullah@almsaeedstudio.com>
             * Licensed under MIT (https://github.com/almasaeed2010/AdminLTE/blob/master/LICENSE)
             */
            ! function(e, t) {
                "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define
                    .amd ? define(["exports"], t) : t(e.adminlte = {})
            }(this, function(e) {
                "use strict";
                var i, t, o, n, r, a, s, c, f, l, u, d, h, p, _, g, y, m, v, C, D, E, A, O, w, b, L, S, j, T, I, Q, R, P, x,
                    B, M, k, H, N, Y, U, V, G, W, X, z, F, q, J, K, Z, $, ee, te, ne = "function" == typeof Symbol &&
                    "symbol" == typeof Symbol.iterator ? function(e) {
                        return typeof e
                    } : function(e) {
                        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ?
                            "symbol" : typeof e
                    },
                    ie = function(e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    },
                    oe = (i = jQuery, t = "ControlSidebar", o = "lte.control.sidebar", n = i.fn[t], r = ".control-sidebar",
                        a = '[data-widget="control-sidebar"]', s = ".main-header", c = "control-sidebar-open", f =
                        "control-sidebar-slide-open", l = {
                            slide: !0
                        }, u = function() {
                            function n(e, t) {
                                ie(this, n), this._element = e, this._config = this._getConfig(t)
                            }
                            return n.prototype.show = function() {
                                this._config.slide ? i("body").removeClass(f) : i("body").removeClass(c)
                            }, n.prototype.collapse = function() {
                                this._config.slide ? i("body").addClass(f) : i("body").addClass(c)
                            }, n.prototype.toggle = function() {
                                this._setMargin(), i("body").hasClass(c) || i("body").hasClass(f) ? this.show() : this
                                    .collapse()
                            }, n.prototype._getConfig = function(e) {
                                return i.extend({}, l, e)
                            }, n.prototype._setMargin = function() {
                                i(r).css({
                                    top: i(s).outerHeight()
                                })
                            }, n._jQueryInterface = function(t) {
                                return this.each(function() {
                                    var e = i(this).data(o);
                                    if (e || (e = new n(this, i(this).data()), i(this).data(o, e)),
                                        "undefined" === e[t]) throw new Error(t + " is not a function");
                                    e[t]()
                                })
                            }, n
                        }(), i(document).on("click", a, function(e) {
                            e.preventDefault(), u._jQueryInterface.call(i(this), "toggle")
                        }), i.fn[t] = u._jQueryInterface, i.fn[t].Constructor = u, i.fn[t].noConflict = function() {
                            return i.fn[t] = n, u._jQueryInterface
                        }, u),
                    re = (d = jQuery, h = "Layout", p = "lte.layout", _ = d.fn[h], g = ".main-sidebar", y = ".main-header",
                        m = ".content-wrapper", v = ".main-footer", C = "hold-transition", D = function() {
                            function n(e) {
                                ie(this, n), this._element = e, this._init()
                            }
                            return n.prototype.fixLayoutHeight = function() {
                                var e = {
                                        window: d(window).height(),
                                        header: d(y).outerHeight(),
                                        footer: d(v).outerHeight(),
                                        sidebar: d(g).height()
                                    },
                                    t = this._max(e);
                                d(m).css("min-height", t - e.header), d(g).css("min-height", t - e.header)
                            }, n.prototype._init = function() {
                                var e = this;
                                d("body").removeClass(C), this.fixLayoutHeight(), d(g).on(
                                    "collapsed.lte.treeview expanded.lte.treeview collapsed.lte.pushmenu expanded.lte.pushmenu",
                                    function() {
                                        e.fixLayoutHeight()
                                    }), d(window).resize(function() {
                                    e.fixLayoutHeight()
                                }), d("body, html").css("height", "auto")
                            }, n.prototype._max = function(t) {
                                var n = 0;
                                return Object.keys(t).forEach(function(e) {
                                    t[e] > n && (n = t[e])
                                }), n
                            }, n._jQueryInterface = function(t) {
                                return this.each(function() {
                                    var e = d(this).data(p);
                                    e || (e = new n(this), d(this).data(p, e)), t && e[t]()
                                })
                            }, n
                        }(), d(window).on("load", function() {
                            D._jQueryInterface.call(d("body"))
                        }), d.fn[h] = D._jQueryInterface, d.fn[h].Constructor = D, d.fn[h].noConflict = function() {
                            return d.fn[h] = _, D._jQueryInterface
                        }, D),
                    ae = (E = jQuery, A = "PushMenu", w = "." + (O = "lte.pushmenu"), b = E.fn[A], L = {
                        COLLAPSED: "collapsed" + w,
                        SHOWN: "shown" + w
                    }, S = {
                        screenCollapseSize: 768
                    }, j = {
                        TOGGLE_BUTTON: '[data-widget="pushmenu"]',
                        SIDEBAR_MINI: ".sidebar-mini",
                        SIDEBAR_COLLAPSED: ".sidebar-collapse",
                        BODY: "body",
                        OVERLAY: "#sidebar-overlay",
                        WRAPPER: ".wrapper"
                    }, T = "sidebar-collapse", I = "sidebar-open", Q = function() {
                        function n(e, t) {
                            ie(this, n), this._element = e, this._options = E.extend({}, S, t), E(j.OVERLAY).length ||
                                this._addOverlay()
                        }
                        return n.prototype.show = function() {
                            E(j.BODY).addClass(I).removeClass(T);
                            var e = E.Event(L.SHOWN);
                            E(this._element).trigger(e)
                        }, n.prototype.collapse = function() {
                            E(j.BODY).removeClass(I).addClass(T);
                            var e = E.Event(L.COLLAPSED);
                            E(this._element).trigger(e)
                        }, n.prototype.toggle = function() {
                            (E(window).width() >= this._options.screenCollapseSize ? !E(j.BODY).hasClass(T) : E(j
                                .BODY).hasClass(I)) ? this.collapse(): this.show()
                        }, n.prototype._addOverlay = function() {
                            var e = this,
                                t = E("<div />", {
                                    id: "sidebar-overlay"
                                });
                            t.on("click", function() {
                                e.collapse()
                            }), E(j.WRAPPER).append(t)
                        }, n._jQueryInterface = function(t) {
                            return this.each(function() {
                                var e = E(this).data(O);
                                e || (e = new n(this), E(this).data(O, e)), t && e[t]()
                            })
                        }, n
                    }(), E(document).on("click", j.TOGGLE_BUTTON, function(e) {
                        e.preventDefault();
                        var t = e.currentTarget;
                        "pushmenu" !== E(t).data("widget") && (t = E(t).closest(j.TOGGLE_BUTTON)), Q
                            ._jQueryInterface.call(E(t), "toggle")
                    }), E.fn[A] = Q._jQueryInterface, E.fn[A].Constructor = Q, E.fn[A].noConflict = function() {
                        return E.fn[A] = b, Q._jQueryInterface
                    }, Q),
                    se = (R = jQuery, P = "Treeview", B = "." + (x = "lte.treeview"), M = R.fn[P], k = {
                        SELECTED: "selected" + B,
                        EXPANDED: "expanded" + B,
                        COLLAPSED: "collapsed" + B,
                        LOAD_DATA_API: "load" + B
                    }, H = ".nav-item", N = ".nav-treeview", Y = ".menu-open", V = "menu-open", G = {
                        trigger: (U = '[data-widget="treeview"]') + " " + ".nav-link",
                        animationSpeed: 300,
                        accordion: !0
                    }, W = function() {
                        function i(e, t) {
                            ie(this, i), this._config = t, this._element = e
                        }
                        return i.prototype.init = function() {
                            this._setupListeners()
                        }, i.prototype.expand = function(e, t) {
                            var n = this,
                                i = R.Event(k.EXPANDED);
                            if (this._config.accordion) {
                                var o = t.siblings(Y).first(),
                                    r = o.find(N).first();
                                this.collapse(r, o)
                            }
                            e.slideDown(this._config.animationSpeed, function() {
                                t.addClass(V), R(n._element).trigger(i)
                            })
                        }, i.prototype.collapse = function(e, t) {
                            var n = this,
                                i = R.Event(k.COLLAPSED);
                            e.slideUp(this._config.animationSpeed, function() {
                                t.removeClass(V), R(n._element).trigger(i), e.find(Y + " > " + N).slideUp(),
                                    e.find(Y).removeClass(V)
                            })
                        }, i.prototype.toggle = function(e) {
                            var t = R(e.currentTarget),
                                n = t.next();
                            if (n.is(N)) {
                                e.preventDefault();
                                var i = t.parents(H).first();
                                i.hasClass(V) ? this.collapse(R(n), i) : this.expand(R(n), i)
                            }
                        }, i.prototype._setupListeners = function() {
                            var t = this;
                            R(document).on("click", this._config.trigger, function(e) {
                                t.toggle(e)
                            })
                        }, i._jQueryInterface = function(n) {
                            return this.each(function() {
                                var e = R(this).data(x),
                                    t = R.extend({}, G, R(this).data());
                                e || (e = new i(R(this), t), R(this).data(x, e)), "init" === n && e[n]()
                            })
                        }, i
                    }(), R(window).on(k.LOAD_DATA_API, function() {
                        R(U).each(function() {
                            W._jQueryInterface.call(R(this), "init")
                        })
                    }), R.fn[P] = W._jQueryInterface, R.fn[P].Constructor = W, R.fn[P].noConflict = function() {
                        return R.fn[P] = M, W._jQueryInterface
                    }, W),
                    ce = (X = jQuery, z = "Widget", q = "." + (F = "lte.widget"), J = X.fn[z], K = {
                        EXPANDED: "expanded" + q,
                        COLLAPSED: "collapsed" + q,
                        REMOVED: "removed" + q
                    }, $ = "collapsed-card", ee = {
                        animationSpeed: "normal",
                        collapseTrigger: (Z = {
                            DATA_REMOVE: '[data-widget="remove"]',
                            DATA_COLLAPSE: '[data-widget="collapse"]',
                            CARD: ".card",
                            CARD_HEADER: ".card-header",
                            CARD_BODY: ".card-body",
                            CARD_FOOTER: ".card-footer",
                            COLLAPSED: ".collapsed-card"
                        }).DATA_COLLAPSE,
                        removeTrigger: Z.DATA_REMOVE
                    }, te = function() {
                        function n(e, t) {
                            ie(this, n), this._element = e, this._parent = e.parents(Z.CARD).first(), this._settings = X
                                .extend({}, ee, t)
                        }
                        return n.prototype.collapse = function() {
                            var e = this;
                            this._parent.children(Z.CARD_BODY + ", " + Z.CARD_FOOTER).slideUp(this._settings
                                .animationSpeed,
                                function() {
                                    e._parent.addClass($)
                                });
                            var t = X.Event(K.COLLAPSED);
                            this._element.trigger(t, this._parent)
                        }, n.prototype.expand = function() {
                            var e = this;
                            this._parent.children(Z.CARD_BODY + ", " + Z.CARD_FOOTER).slideDown(this._settings
                                .animationSpeed,
                                function() {
                                    e._parent.removeClass($)
                                });
                            var t = X.Event(K.EXPANDED);
                            this._element.trigger(t, this._parent)
                        }, n.prototype.remove = function() {
                            this._parent.slideUp();
                            var e = X.Event(K.REMOVED);
                            this._element.trigger(e, this._parent)
                        }, n.prototype.toggle = function() {
                            this._parent.hasClass($) ? this.expand() : this.collapse()
                        }, n.prototype._init = function(e) {
                            var t = this;
                            this._parent = e, X(this).find(this._settings.collapseTrigger).click(function() {
                                t.toggle()
                            }), X(this).find(this._settings.removeTrigger).click(function() {
                                t.remove()
                            })
                        }, n._jQueryInterface = function(t) {
                            return this.each(function() {
                                var e = X(this).data(F);
                                e || (e = new n(X(this), e), X(this).data(F, "string" == typeof t ? e : t)),
                                    "string" == typeof t && t.match(/remove|toggle/) ? e[t]() : "object" ===
                                    ("undefined" == typeof t ? "undefined" : ne(t)) && e._init(X(this))
                            })
                        }, n
                    }(), X(document).on("click", Z.DATA_COLLAPSE, function(e) {
                        e && e.preventDefault(), te._jQueryInterface.call(X(this), "toggle")
                    }), X(document).on("click", Z.DATA_REMOVE, function(e) {
                        e && e.preventDefault(), te._jQueryInterface.call(X(this), "remove")
                    }), X.fn[z] = te._jQueryInterface, X.fn[z].Constructor = te, X.fn[z].noConflict = function() {
                        return X.fn[z] = J, te._jQueryInterface
                    }, te);
                e.ControlSidebar = oe, e.Layout = re, e.PushMenu = ae, e.Treeview = se, e.Widget = ce, Object
                    .defineProperty(e, "__esModule", {
                        value: !0
                    })
            });
            //# sourceMappingURL=adminlte.min.js.map
        </script>



    </body>
@endsection
<style type="text/css">
	#print-array {
	  position: fixed;
	  top: 0;
	  right: 0;
	  padding: 20px;
	  color: red;
	}
	.ui-datepicker .ui-datepicker-calendar .ui-state-highlight-tt a{
			background: green !important;
	}
	
	</style>

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>
