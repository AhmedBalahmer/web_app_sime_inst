 @if (isset($post) && $post->image)
     <div class="md-4">
         <img src="{{ asset('storage/' . $post->image) }}" class="w-32 h-32 object-cover rounded-xl">
     </div>
 @endif

 <input type="file" name="image" id="file_input"
     class="w-full border border-gray-200 bg-gray-50 block focus:outline-none rounder-xl">

 <p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG JPG OR GIF</p>
 <textarea name="description" rows="5" class="mt-10 w-full border border-gray-200 rounder-xl"
     placeholder="{{ __('write a description') }}">{{old('description',$post->description ?? '')}}</textarea>
