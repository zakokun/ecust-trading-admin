<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="stock/list" method="get"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <table class="searchContent">
                <tr>
                    <td>
                        数字货币名称：<input type="text" name="keyword"/>
                    </td>
                    <!--                    选择价格区间比较低的股票-->
                    <td class="dateRange">
                        价格区间:
                        <input type="text" name="keyword"/>
                        <span class="limit">-</span>
                        <input type="text" name="keyword"/>
                    </td>
                </tr>
            </table>
            <div class="subBar">
                <ul>
                    <li>
                        <div class="button">
                            <div class="buttonContent">
                                <button type="reset">重置</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="submit">检索</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>

<div class="pageContent">
    <div class="panelBar">
    </div>
    <table class="table" width="100%" layoutH="138">
        <thead>
        <tr>
            <th width="80">1</th>
            <th width="120">货币名称</th>
            <th>交易所名称</th>
            <th width="100">开盘价</th>
            <th width="150">收盘价</th>
            <th width="80">最高价</th>
            <th width="80">最低价</th>
            <th width="80">成交量</th>
            <th width="80">时间</th>
        </tr>
        </thead>
        <tbody>

        <tr target="sid_user" rel="5">
            <td width="80">1</td>
            <td>BTC/USDT</td>
            <td>火币网</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>23.23</td>
            <td>2021-03-10</td>
        </tr>

        <tr target="sid_user" rel="5">
            <td width="80">1</td>

            <td>BTC/USDT</td>
            <td>火币网</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>12.23</td>
            <td>2021-03-11</td>
        </tr>
        <tr target="sid_user" rel="5">
            <td width="80">1</td>
            <td>BTC/USDT</td>
            <td>火币网</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>55471.23</td>
            <td>44.23</td>
            <td>2021-03-12</td>
        </tr>
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pages">
            <span>显示</span>
            <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span>条，共条</span>
        </div>
        <div class="pagination" targetType="navTab" totalCount="40" numPerPage="20" pageNumShown="10"
             currentPage="1">
        </div>
    </div>
</div>

<form id="pagerForm" action="/stock/list" method="get">
    <input type="hidden" name="status" value="${param.status}">
    <input type="hidden" name="keywords" value="${param.keywords}"/>
    <input type="hidden" name="pageNum" value="1"/>
    <input type="hidden" name="numPerPage" value="${model.numPerPage}"/>
    <input type="hidden" name="orderField" value="${param.orderField}"/>
</form>