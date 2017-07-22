<style>
    .btn-select {
        position: relative;
        padding: 0;
        min-width: 236px;
        width: 100%;
        border-radius: 0;
        margin-bottom: 20px;
    }

    .btn-select .btn-select-value {
        padding: 6px 12px;
        display: block;
        position: absolute;
        left: 0;
        right: 34px;
        text-align: left;
        text-overflow: ellipsis;
        overflow: hidden;
        border-top: none !important;
        border-bottom: none !important;
        border-left: none !important;
    }

    .btn-select .btn-select-arrow {
        float: right;
        line-height: 20px;
        padding: 6px 10px;
        top: 0;
    }

    .btn-select ul {
        display: none;
        background-color: white;
        color: black;
        clear: both;
        list-style: none;
        padding: 0;
        margin: 0;
        border-top: none !important;
        position: absolute;
        left: -1px;
        right: -1px;
        top: 33px;
        z-index: 999;
    }

    .btn-select ul li {
        padding: 3px 6px;
        text-align: left;
    }

    .btn-select ul li:hover {
        background-color: #f4f4f4;
    }

    .btn-select ul li.selected {
        color: white;
    }

    .btn-select.btn-select-light .btn-select-value {
        background-color: white;
        color: black;
    }
</style>
