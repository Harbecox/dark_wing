<div>
    <div class="order_history">
        <h5 class="fs-34 fw-normal lh-110 text-center pb-4" style="color: #586E81">Order history</h5>
        <div class="personal_table">
            <table>
                @foreach($orders as $order)
                    <tr>
                        <td width="22%" class="d-none d-lg-table-cell">
                            <div class="call" style="padding-left: 30px">
                                <p>Date</p>
                                <span>{{ $order->created_at->toFormattedDateString() }}</span>
                            </div>
                        </td>
                        <td width="100%">
                            <div class="call">
                                <p>Airport</p>
                                @if($order->airport)
                                    <span>{{ $order->airport->title }}</span>
                                @elseif($order->deliveryAirport)
                                    <span>{{ $order->deliveryAirport }}</span>
                                @else
                                    <span>&nbsp</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="call">
                                <div style="padding: @if($order->order_pdf) 13px @else 28px @endif 0">
                                    @if($order->order_pdf)
                                        <a style="cursor: pointer" onclick="showModal('{{ \Illuminate\Support\Facades\Storage::url($order->order_pdf) }}')">
                                            <img src="/image/eye.svg" class="image_grey">
                                            <img src="/image/eye1.svg" class="image_white">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="call" style="padding-right: 40px">
                                <div style="padding: @if($order->order_pdf) 13px @else 28px @endif 0">
                                    @if($order->order_pdf)
                                        <a href="{{ route("order.download",$order) }}">
                                            <img src="/image/download.svg" class="image_grey">
                                            <img src="/image/download1.svg" class="image_white">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            @if($limit < $count)
                <button wire:click="see_more" class="btn btn-lg btn-outline-light text-white text-uppercase mt-3" style="width:100%">See more</button>
            @endif
        </div>
    </div>
    <script src="/js/bootstrap.bundle.js"></script>
    <div class="modal fade" id="pdf_modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content" style="height: 85vh">
                <iframe width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
    <script>
        function showModal(pdf){
            let modal = document.getElementById("pdf_modal");
            modal.querySelector("iframe").setAttribute("src",pdf);
            new bootstrap.Modal(modal).show();
        }
    </script>
</div>
