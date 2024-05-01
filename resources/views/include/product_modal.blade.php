<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form action="/product/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="addProductModalLabel">ADD PRODUCT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="add_product_image">PRODUCT IMAGE</label>
                                <input type="file" class="form-control" id="add_product_image" name="add_product_image" value="{{ old('add_product_image') }}" />
                                @error('add_product_image') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_product_code">PRODUCT CODE</label>
                                <input type="text" class="form-control" id="add_product_code" name="add_product_code" value="{{ old('add_product_code', $productCode) }}" readonly />
                                @error('add_product_code') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_product_name_id">PRODUCT NAME</label>
                                <input type="text" class="form-control" id="add_product_name_id" name="add_product_name_id" value="{{ old('add_product_name_id') }}" />
                                @error('add_product_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_price">PRICE</label>
                                <input type="text" class="form-control" id="add_price" name="add_price" value="{{ old('add_price') }}" />
                                @error('add_price') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_quantity">QUANTITY</label>
                                <input type="text" class="form-control" id="add_quantity" name="add_quantity" value="{{ old('add_quantity') }}" />
                                @error('add_quantity') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_category_id" class="form-label">CATEGORY</label>
                                <select class="form-select" id="add_category_id" name="add_category_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($categories as $category)
                                        @if ($category->category)
                                            <option value="{{ $category->category_id }}">{{ $category->category }}</option>
                                        @endif
                                        @if (old('add_category_id') == $category->category_id)
                                            <option value="{{ $category->category_id }}" selected hidden>{{ $category->category }}</option>
                                        @endif    
                                    @endforeach
                                </select>
                                @error('add_category_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_supplier_id">SUPPLIER</label>
                                <input type="text" class="form-control" id="add_supplier_id" name="add_supplier_id" value="{{ old('add_supplier_id') }}" />
                                @error('add_supplier_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </form>
    </div>
</div>