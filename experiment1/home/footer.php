<footer>
      <div class="container">
        <p>Put together in less than five minutes by
        <a href="http://www.martinbean.co.uk/" rel="author">Martin Bean</a>
        Uses <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a>
        and <a href="http://ryanfait.com/sticky-footer/" rel="external">Ryan Fait&rsquo;s Sticky Footer</a>
        and <a href="#">Aalaap Ghag&rsquo;s Responsive Padding Fix</a>.</p>
      </div>
    </footer>
    
<style>
    footer {
            color: #666;
            background: #222;
            padding: 17px 0 18px 0;
            border-top: 1px solid #000;    
        }
        footer a {
            color: #999;
        }
        footer a:hover {
            color: #efefef;
        }
        .wrapper {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -63px;
        }
        .push {
            height: 63px;
        }
        /* not required for sticky footer; just pushes hero down a bit */
        .wrapper > .container {
            padding-top: 60px;
        }
        /* responsive footer fix by Aalaap Ghag */
        @media (max-width: 767px) {
            body {
                padding-right: 0px;
                padding-left: 0px;
            }
    
            footer, .wrapper {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
</style>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">