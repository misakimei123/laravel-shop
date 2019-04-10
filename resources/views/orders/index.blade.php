@extends('layouts.app')
@section('title', '订单列表')

@section('content')
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="card">
  <div class="card-header">订单列表</div>
  <div class="card-body">
    <ul class="list-group">
      @foreach($orders as $order)
        <li class="list-group-item">
          <div class="card">
            <div class="card-header">
              订单号：{{ $order->no }}
              <span class="float-right">{{ $order->created_at->format('Y-m-d H:i:s') }}</span>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                <tr>
                  <th>商品信息</th>
                  <th class="text-center">单价</th>
                  <th class="text-center">数量</th>
                  <th class="text-center">订单总价</th>
                  <th class="text-center">状态</th>
                  <th class="text-center">操作</th>
                </tr>
                </thead>
                @foreach($order->items as $index => $item)
                  <tr>
                    <td class="product-info">
                      <div class="preview">
                        <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                          <img src="{{ $item->product->image_url }}">
                        </a>
                      </div>
                      <div>
                        <span class="product-title">
                           <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">{{ $item->product->title }}</a>
                        </span>
                        <span class="sku-title">{{ $item->productSku->title }}</span>
                      </div>
                    </td>
                    <td class="sku-price text-center">￥{{ $item->price }}</td>
                    <td class="sku-amount text-center">{{ $item->amount }}</td>
                    @if($index === 0)
                      <td rowspan="{{ count($order->items) }}" class="text-center total-amount">￥{{ $order->total_amount }}</td>
                      <td rowspan="{{ count($order->items) }}" class="text-center">
                        @if($order->paid_at)
                          @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                            已支付
                          @else
                            {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                          @endif
                        @elseif($order->closed)
                          已关闭
                        @else
                          未支付<br>
                          请于 {{ $order->created_at->addSeconds(config('app.order_ttl'))->format('Y-m-d H:i') }} 前完成支付<br>
                          否则订单将自动关闭
                        @endif
                      </td>
                      <td rowspan="{{ count($order->items) }}" class="text-center">
                        <a class="btn btn-primary btn-sm" target="_blank"  href="{{ route('orders.show', ['order' => $order->id]) }}">查看订单</a>



                        @if(!$order->paid_at && !$order->closed)
                          <a class="btn btn-danger btn-sm close_order"  href="javascript:;"  data-id="{{$order->id}}">取消订单</a>
                        @endif


                        <!-- 评价入口开始 -->
                        @if($order->paid_at)
                          <a class="btn btn-success btn-sm" href="{{ route('orders.review.show', ['order' => $order->id]) }}">
                            {{ $order->reviewed ? '查看评价' : '评价' }}
                          </a>
                        @endif
                        <!-- 评价入口结束 -->
                      </td>

                    @endif
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <div class="float-right">{{ $orders->render() }}</div>
  </div>
</div>
</div>
</div>
@endsection


@section('scriptsAfterJs')
  <script>
  $(document).ready(function() {

  // 确认收货按钮点击事件
  $('.close_order').click(function() {

      var order_id = $(this).attr('data-id')
  // 弹出确认框
  swal({
  title: "确认取消订单？",
  icon: "warning",
  dangerMode: true,
  buttons: ['我再想想', '取消'],
  })
  .then(function(ret) {
  // 如果点击取消按钮则不做任何操作
  if (!ret) {
  return;
  }
  // ajax 提交确认操作

  axios.post('{{ route('orders.close') }}', {
      order_id: order_id
  })
  .then(function () {
  // 刷新页面
  location.reload();
  })
  });
  });

  });
  </script>
@endsection