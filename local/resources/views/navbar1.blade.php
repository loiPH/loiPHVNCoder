<style>

    /*phần ul li theo mũi tên*/
    .breadcrumb{
        background-color: transparent;
        font-size: 14px;
    }

    .breadcrumb li:first-child:after, .breadcrumb li:first-child:before {
        border-color: #F4A137;
    }

    .breadcrumb li:after {
        content: "";
        background: transparent;
        border-right: 1px solid #e1e1e1;
        border-top: 1px solid #e1e1e1;
        display: inline-block;
        height: 17px;
        width: 16px;
        position: absolute;
        right: -8px;
        top: 3px;
        z-index: 1;
        transform: rotate(45deg);
    }

    .breadcrumb li + li:before {
        content: "";
        background: transparent;
        border-left: 1px solid #e1e1e1;
        border-top: 1px solid #e1e1e1;
        display: inline-block;
        height: 18px;
        width: 17px;
        position: absolute;
        left: -9px;
        top: 2px;
        transform: rotate(135deg);
    }

    .breadcrumb li:first-child {
        border-left: 1px solid #ddd;
        border-color: #F4A137 !important;
    }

    .breadcrumb li:first-child a {
        color: #F4A137 !important;
    }

    .breadcrumb li {
        position: relative;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        height: 24px;
        line-height: 21px;
        margin-right: 3px;
        padding: 0 15px 0 20px;
    }

    .breadcrumb > li {
        display: inline-block;
    }

    .breadcrumb > li:hover, .breadcrumb > li:hover:before, .breadcrumb > li:hover:after {
        display: inline-block;
        border-color: #F4A137;
    }

    .breadcrumb li a {
        color: #666;
    }

    .breadcrumb li a:hover {
        color: #F4A137;
        text-decoration: none;
    }

    /*End Phần UL LI theo mũi tên*/
</style>

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#"><i class="fas fa-home"></i></a></li>
        <li><a href="#">Smartphone &amp; Tablets</a></li>
        <li><a href="#">Bint Beef</a></li>

    </ul>

</div>