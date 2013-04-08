<?php include("../../_inc/doctype.txt"); ?>
<head>
<title>Khronos OpenGL ES API Registry</title>
<?php include("../../_inc/registry/registry_head.txt"); ?>
</head>
<body id="developers" class="registry">
<?php include("../../_inc/registry/registry_body.txt"); ?>
<h1 class="pagetitle">Khronos OpenGL ES API Registry</h1> <!--	top left shadow-->
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenGL ES API Registry </h1>

<p> The OpenGL ES API registry contains specifications of the core API;
    specifications of Khronos- and vendor-approved OpenGL ES extensions;
    header files corresponding to the specifications; and other related
    documentation. The companion
    <a href="http://www.opengl.org/registry/"> OpenGL API Registry </a>
    has related material including the enumerant registry (shared
    between OpenGL ES and OpenGL).

<h6> OpenGL ES Core API Specification, Headers, and Documentation </h6>

<p> The current version of OpenGL ES is OpenGL ES 3.0. Specifications
    for older versions 2.0 and 1.1 are also available below. For
    additional specifications, headers, and documentation not listed
    below, see the <a
    href="http://www.khronos.org/developers/specs/">Khronos.org
    Developer Pages</a>. Header files not labelled with a revision date
    include their last update time in comments near the top of the file.
    </p>

<h6> OpenGL ES 3.0 Specific </h6>

<ul>
<li> OpenGL ES 3.0.2
     <a href="specs/3.0/es_spec_3.0.2.pdf"> Specification </a>
     (April 8, 2013).
<li> OpenGL ES Shading Language 3.00.4
     <a href="specs/3.0/GLSL_ES_Specification_3.00.4.pdf">
     Specification </a> (March 6, 2013). </li>
<li> <a href="api/3.0/gl3.h"> gl3.h </a>
     OpenGL ES 3.0 Header File. </li>
<li> <a href="api/3.0/gl3ext.h"> gl3ext.h </a>
     OpenGL ES 3.0 Extension Header File (currently empty). </li>
<li> <a href="api/3.0/gl3platform.h"> gl3platform.h </a>
     OpenGL ES 3.0 Platform-Dependent Macros. </li>
<li> <a href="http://www.khronos.org/opengles/sdk/docs/man3/">
      OpenGL ES 3.0 Online Manual Pages.</a> </li>
<li> The OpenGL ES 3.0 headers depend on the shared
     <a href="../egl/api/KHR/khrplatform.h"> &lt;KHR/khrplatform.h&gt; </a>
     header located in the <a href="../egl/"> EGL Registry </a>
</ul>


<h6> OpenGL ES 2.0 Specific </h6>

<ul>
<li> OpenGL ES 2.0.25
     <a href="specs/2.0/es_full_spec_2.0.25.pdf">
     Full Specification </a>,
     <a href="specs/2.0/es_full_spec_2.0.25.withchanges.pdf">
     Full Specification with changes marked</a>,
     <a href="specs/2.0/es_cm_spec_2.0.25.pdf">
     Difference Specification </a> (November 2, 2010). </li>
<li> OpenGL ES Shading Language 1.0.17
     <a href="specs/2.0/GLSL_ES_Specification_1.0.17.pdf">
     Specification </a> (May 12, 2009). </li>
<li> <a href="api/2.0/gl2.h"> gl2.h </a>
     OpenGL ES 2.0 Header File. </li>
<li> <a href="api/2.0/gl2ext.h"> gl2ext.h </a>
     OpenGL ES 2.0 Extension Header File. </li>
<li> <a href="api/2.0/gl2platform.h"> gl2platform.h </a>
     OpenGL ES 2.0 Platform-Dependent Macros. </li>
<li> <a href="http://www.khronos.org/opengles/sdk/docs/man/">
      OpenGL ES 2.0 Online Manual Pages.</a> </li>
<li> The OpenGL ES 2.0 headers depend on the shared
     <a href="../egl/api/KHR/khrplatform.h"> &lt;KHR/khrplatform.h&gt; </a>
     header located in the <a href="../egl/"> EGL Registry </a>
</ul>


<h6> OpenGL ES 1.1 Specific </h6>

<ul>
<li> OpenGL ES 1.1.12
     <a href="specs/1.1/es_full_spec_1.1.12.pdf"> Full Specification </a>
     and
     <a href="specs/1.1/es_cm_spec_1.1.12.pdf"> Difference Specification </a>
     (April 24, 2008). </li>
<li> <a href="api/1.1/gl.h"> gl.h </a>
     OpenGL ES 1.1 Header File. </li>
<li> <a href="api/1.1/glext.h"> glext.h </a>
     OpenGL ES 1.1 Extension Header File. </li>
<li> <a href="api/1.1/glplatform.h"> glplatform.h </a>
     OpenGL ES 1.1 Platform-Dependent Macros. </li>
<li> <a href="api/1.1/egl.h"> &lt;GLES/egl.h&gt; </a>
     EGL Legacy Header File for OpenGL ES 1.1 (August 6, 2008) -
     requires real &lt;EGL/egl.h&gt; from the
     <a href="http://www.khronos.org/registry/egl/"> EGL Registry </a>.
     </li>
<li> <a href="specs/1.1/opengles_spec_1_1_extension_pack.pdf"> OpenGL ES
     1.1.03 Extension Pack </a> (July 19, 2005). </li>
<li> <a href="http://www.khronos.org/opengles/sdk/1.1/docs/man/">
     OpenGL ES 1.1 Online Manual Pages.</a> </li>
<li> The OpenGL ES 1.1 headers depend on the shared
     <a href="../egl/api/khrplatform.h"> khrplatform.h </a>
     header located in the <a href="../egl/"> EGL Registry </a>
</ul>

<h6> OpenGL ES 1.0 Specific </h6>

<ul>
<li> <a href="specs/1.0/opengles_spec_1_0.pdf"> OpenGL ES 1.0.02
     Specification </a>. </li>
<li> <a href="api/1.0/gl.h"> gl.h </a> for OpenGL ES 1.0. </li>
<li> The old <i>OpenGL ES 1.0 and EGL 1.0 Reference Manual</i> is
     obsolete and has been removed from the Registry. Please use the
     <a href="http://www.khronos.org/opengles/sdk/1.1/docs/man/">
     OpenGL ES 1.1 Online Manual Pages</a> instead. </li>
</ul>

<h6> IP Disclosure Statements </h6>

<p> <a href="https://www.khronos.org/files/ip-disclosures/opengl/"> IP
    Disclosure Statements </a> from Khronos Members which bear on OpenGL
    and OpenGL ES are available. </p>
<h6> <a name="otherextspecs"></a>
     Extension Specifications</h6>
<ol>
<li value=1> <a href="extensions/OES/OES_blend_equation_separate.txt">GL_OES_blend_equation_separate</a>
</li>
<li value=2> <a href="extensions/OES/OES_blend_func_separate.txt">GL_OES_blend_func_separate</a>
</li>
<li value=3> <a href="extensions/OES/OES_blend_subtract.txt">GL_OES_blend_subtract</a>
</li>
<li value=4> <a href="extensions/OES/OES_byte_coordinates.txt">GL_OES_byte_coordinates</a>
</li>
<li value=5> <a href="extensions/OES/OES_compressed_ETC1_RGB8_texture.txt">GL_OES_compressed_ETC1_RGB8_texture</a>
</li>
<li value=6> <a href="extensions/OES/OES_compressed_paletted_texture.txt">GL_OES_compressed_paletted_texture</a>
</li>
<li value=7> <a href="extensions/OES/OES_draw_texture.txt">GL_OES_draw_texture</a>
</li>
<li value=8> <a href="extensions/OES/OES_extended_matrix_palette.txt">GL_OES_extended_matrix_palette</a>
</li>
<li value=9> <a href="extensions/OES/OES_fixed_point.txt">GL_OES_fixed_point</a>
</li>
<li value=10> <a href="extensions/OES/OES_framebuffer_object.txt">GL_OES_framebuffer_object</a>
</li>
<li value=11> <a href="extensions/OES/OES_matrix_get.txt">GL_OES_matrix_get</a>
</li>
<li value=12> <a href="extensions/OES/OES_matrix_palette.txt">GL_OES_matrix_palette</a>
</li>
<li value=14> <a href="extensions/OES/OES_point_size_array.txt">GL_OES_point_size_array</a>
</li>
<li value=15> <a href="extensions/OES/OES_point_sprite.txt">GL_OES_point_sprite</a>
</li>
<li value=16> <a href="extensions/OES/OES_query_matrix.txt">GL_OES_query_matrix</a>
</li>
<li value=17> <a href="extensions/OES/OES_read_format.txt">GL_OES_read_format</a>
</li>
<li value=18> <a href="extensions/OES/OES_single_precision.txt">GL_OES_single_precision</a>
</li>
<li value=19> <a href="extensions/OES/OES_stencil_wrap.txt">GL_OES_stencil_wrap</a>
</li>
<li value=20> <a href="extensions/OES/OES_texture_cube_map.txt">GL_OES_texture_cube_map</a>
</li>
<li value=21> <a href="extensions/OES/OES_texture_env_crossbar.txt">GL_OES_texture_env_crossbar</a>
</li>
<li value=22> <a href="extensions/OES/OES_texture_mirrored_repeat.txt">GL_OES_texture_mirrored_repeat</a>
</li>
<li value=23> <a href="extensions/OES/OES_EGL_image.txt">GL_OES_EGL_image</a>
</li>
<li value=24> <a href="extensions/OES/OES_depth24.txt">GL_OES_depth24</a>
</li>
<li value=25> <a href="extensions/OES/OES_depth32.txt">GL_OES_depth32</a>
</li>
<li value=26> <a href="extensions/OES/OES_element_index_uint.txt">GL_OES_element_index_uint</a>
</li>
<li value=27> <a href="extensions/OES/OES_fbo_render_mipmap.txt">GL_OES_fbo_render_mipmap</a>
</li>
<li value=28> <a href="extensions/OES/OES_fragment_precision_high.txt">GL_OES_fragment_precision_high</a>
</li>
<li value=29> <a href="extensions/OES/OES_mapbuffer.txt">GL_OES_mapbuffer</a>
</li>
<li value=30> <a href="extensions/OES/OES_rgb8_rgba8.txt">GL_OES_rgb8_rgba8</a>
</li>
<li value=31> <a href="extensions/OES/OES_stencil1.txt">GL_OES_stencil1</a>
</li>
<li value=32> <a href="extensions/OES/OES_stencil4.txt">GL_OES_stencil4</a>
</li>
<li value=33> <a href="extensions/OES/OES_stencil8.txt">GL_OES_stencil8</a>
</li>
<li value=34> <a href="extensions/OES/OES_texture_3D.txt">GL_OES_texture_3D</a>
</li>
<li value=35> <a href="extensions/OES/OES_texture_float_linear.txt">GL_OES_texture_float_linear</a>
     <br> <a href="extensions/OES/OES_texture_float_linear.txt">GL_OES_texture_half_float_linear</a>
</li>
<li value=36> <a href="extensions/OES/OES_texture_float.txt">GL_OES_texture_float</a>
     <br> <a href="extensions/OES/OES_texture_float.txt">GL_OES_texture_half_float</a>
</li>
<li value=37> <a href="extensions/OES/OES_texture_npot.txt">GL_OES_texture_npot</a>
</li>
<li value=38> <a href="extensions/OES/OES_vertex_half_float.txt">GL_OES_vertex_half_float</a>
</li>
<li value=39> <a href="extensions/AMD/AMD_compressed_3DC_texture.txt">GL_AMD_compressed_3DC_texture</a>
</li>
<li value=40> <a href="extensions/AMD/AMD_compressed_ATC_texture.txt">GL_AMD_compressed_ATC_texture</a>
</li>
<li value=41> <a href="extensions/EXT/texture_filter_anisotropic.txt">GL_EXT_texture_filter_anisotropic</a>
</li>
<li value=42> <a href="extensions/EXT/EXT_texture_type_2_10_10_10_REV.txt">GL_EXT_texture_type_2_10_10_10_REV</a>
</li>
<li value=43> <a href="extensions/OES/OES_depth_texture.txt">GL_OES_depth_texture</a>
</li>
<li value=44> <a href="extensions/OES/OES_packed_depth_stencil.txt">GL_OES_packed_depth_stencil</a>
</li>
<li value=45> <a href="extensions/OES/OES_standard_derivatives.txt">GL_OES_standard_derivatives</a>
</li>
<li value=46> <a href="extensions/OES/OES_vertex_type_10_10_10_2.txt">GL_OES_vertex_type_10_10_10_2</a>
</li>
<li value=47> <a href="extensions/OES/OES_get_program_binary.txt">GL_OES_get_program_binary</a>
</li>
<li value=48> <a href="extensions/AMD/AMD_program_binary_Z400.txt">GL_AMD_program_binary_Z400</a>
</li>
<li value=49> <a href="extensions/EXT/texture_compression_dxt1.txt">GL_EXT_texture_compression_dxt1</a>
</li>
<li value=50> <a href="extensions/AMD/performance_monitor.txt">GL_AMD_performance_monitor</a>
</li>
<li value=51> <a href="extensions/EXT/EXT_texture_format_BGRA8888.txt">GL_EXT_texture_format_BGRA8888</a>
</li>
<li value=52> <a href="extensions/NV/fence.txt">GL_NV_fence</a>
</li>
<li value=53> <a href="extensions/IMG/IMG_read_format.txt">GL_IMG_read_format</a>
</li>
<li value=54> <a href="extensions/IMG/IMG_texture_compression_pvrtc.txt">GL_IMG_texture_compression_pvrtc</a>
</li>
<li value=55> <a href="extensions/QCOM/QCOM_driver_control.txt">GL_QCOM_driver_control</a>
</li>
<li value=56> <a href="extensions/QCOM/QCOM_performance_monitor_global_mode.txt">GL_QCOM_performance_monitor_global_mode</a>
</li>
<li value=57> <a href="extensions/IMG/IMG_user_clip_plane.txt">GL_IMG_user_clip_plane</a>
</li>
<li value=58> <a href="extensions/IMG/IMG_texture_env_enhanced_fixed_function.txt">GL_IMG_texture_env_enhanced_fixed_function</a>
</li>
<li value=59> <a href="extensions/APPLE/APPLE_texture_2D_limited_npot.txt">GL_APPLE_texture_2D_limited_npot</a>
</li>
<li value=60> <a href="extensions/EXT/texture_lod_bias.txt">GL_EXT_texture_lod_bias</a>
</li>
<li value=61> <a href="extensions/QCOM/QCOM_writeonly_rendering.txt">GL_QCOM_writeonly_rendering</a>
</li>
<li value=62> <a href="extensions/QCOM/QCOM_extended_get.txt">GL_QCOM_extended_get</a>
</li>
<li value=63> <a href="extensions/QCOM/QCOM_extended_get2.txt">GL_QCOM_extended_get2</a>
</li>
<li value=64> <a href="extensions/EXT/EXT_discard_framebuffer.txt">GL_EXT_discard_framebuffer</a>
</li>
<li value=65> <a href="extensions/EXT/blend_minmax.txt">GL_EXT_blend_minmax</a>
</li>
<li value=66> <a href="extensions/EXT/EXT_read_format_bgra.txt">GL_EXT_read_format_bgra</a>
</li>
<li value=67> <a href="extensions/IMG/IMG_program_binary.txt">GL_IMG_program_binary</a>
</li>
<li value=68> <a href="extensions/IMG/IMG_shader_binary.txt">GL_IMG_shader_binary</a>
</li>
<li value=69> <a href="extensions/EXT/multi_draw_arrays.txt">GL_EXT_multi_draw_arrays</a>
     <br> <a href="extensions/EXT/multi_draw_arrays.txt">GL_SUN_multi_draw_arrays</a>
</li>
<li value=70> <a href="extensions/QCOM/QCOM_tiled_rendering.txt">GL_QCOM_tiled_rendering</a>
</li>
<li value=71> <a href="extensions/OES/OES_vertex_array_object.txt">GL_OES_vertex_array_object</a>
</li>
<li value=72> <a href="extensions/NV/EGL_NV_coverage_sample.txt">GL_NV_coverage_sample</a>
</li>
<li value=73> <a href="extensions/NV/EGL_NV_depth_nonlinear.txt">GL_NV_depth_nonlinear</a>
</li>
<li value=74> <a href="extensions/IMG/IMG_multisampled_render_to_texture.txt">GL_IMG_multisampled_render_to_texture</a>
</li>
<li value=75> <a href="extensions/OES/EGL_KHR_fence_sync.txt">GL_OES_EGL_sync</a>
</li>
<li value=76> <a href="extensions/APPLE/rgb_422.txt">GL_APPLE_rgb_422</a>
</li>
<li value=77> <a href="extensions/EXT/EXT_shader_texture_lod.txt">GL_EXT_shader_texture_lod</a>
</li>
<li value=78> <a href="extensions/APPLE/APPLE_framebuffer_multisample.txt">GL_APPLE_framebuffer_multisample</a>
</li>
<li value=79> <a href="extensions/APPLE/APPLE_texture_format_BGRA8888.txt">GL_APPLE_texture_format_BGRA8888</a>
</li>
<li value=80> <a href="extensions/APPLE/APPLE_texture_max_level.txt">GL_APPLE_texture_max_level</a>
</li>
<li value=81> <a href="extensions/ARM/ARM_mali_shader_binary.txt">GL_ARM_mali_shader_binary</a>
</li>
<li value=82> <a href="extensions/ARM/ARM_rgba8.txt">GL_ARM_rgba8</a>
</li>
<li value=83> <a href="extensions/ANGLE/ANGLE_framebuffer_blit.txt">GL_ANGLE_framebuffer_blit</a>
</li>
<li value=84> <a href="extensions/ANGLE/ANGLE_framebuffer_multisample.txt">GL_ANGLE_framebuffer_multisample</a>
</li>
<li value=85> <a href="extensions/VIV/VIV_shader_binary.txt">GL_VIV_shader_binary</a>
</li>
<li value=86> <a href="extensions/EXT/EXT_frag_depth.txt">GL_EXT_frag_depth</a>
</li>
<li value=87> <a href="extensions/OES/OES_EGL_image_external.txt">GL_OES_EGL_image_external</a>
</li>
<li value=88> <a href="extensions/DMP/DMP_shader_binary.txt">GL_DMP_shader_binary</a>
</li>
<li value=89> <a href="extensions/QCOM/QCOM_alpha_test.txt">GL_QCOM_alpha_test</a>
</li>
<li value=90> <a href="extensions/EXT/EXT_unpack_subimage.txt">GL_EXT_unpack_subimage</a>
</li>
<li value=91> <a href="extensions/NV/NV_draw_buffers.txt">GL_NV_draw_buffers</a>
</li>
<li value=92> <a href="extensions/NV/NV_fbo_color_attachments.txt">GL_NV_fbo_color_attachments</a>
</li>
<li value=93> <a href="extensions/NV/NV_read_buffer.txt">GL_NV_read_buffer</a>
</li>
<li value=94> <a href="extensions/NV/NV_read_depth_stencil.txt">GL_NV_read_depth_stencil</a>
</li>
<li value=95> <a href="extensions/NV/NV_texture_compression_s3tc_update.txt">GL_NV_texture_compression_s3tc_update</a>
</li>
<li value=96> <a href="extensions/NV/NV_texture_npot_2D_mipmap.txt">GL_NV_texture_npot_2D_mipmap</a>
</li>
<li value=97> <a href="extensions/EXT/EXT_color_buffer_half_float.txt">GL_EXT_color_buffer_half_float</a>
</li>
<li value=98> <a href="extensions/EXT/EXT_debug_label.txt">GL_EXT_debug_label</a>
</li>
<li value=99> <a href="extensions/EXT/EXT_debug_marker.txt">GL_EXT_debug_marker</a>
</li>
<li value=100> <a href="extensions/EXT/EXT_occlusion_query_boolean.txt">GL_EXT_occlusion_query_boolean</a>
</li>
<li value=101> <a href="extensions/EXT/EXT_separate_shader_objects.txt">GL_EXT_separate_shader_objects</a>
</li>
<li value=102> <a href="extensions/EXT/EXT_shadow_samplers.txt">GL_EXT_shadow_samplers</a>
</li>
<li value=103> <a href="extensions/EXT/EXT_texture_rg.txt">GL_EXT_texture_rg</a>
</li>
<li value=104> <a href="extensions/NV/NV_EGL_stream_consumer_external.txt">GL_NV_EGL_stream_consumer_external</a>
</li>
<li value=105> <a href="extensions/EXT/EXT_sRGB.txt">GL_EXT_sRGB</a>
</li>
<li value=106> <a href="extensions/EXT/EXT_multisampled_render_to_texture.txt">GL_EXT_multisampled_render_to_texture</a>
</li>
<li value=107> <a href="extensions/EXT/EXT_robustness.txt">GL_EXT_robustness</a>
</li>
<li value=108> <a href="extensions/EXT/EXT_texture_storage.txt">GL_EXT_texture_storage</a>
</li>
<li value=109> <a href="extensions/ANGLE/ANGLE_instanced_arrays.txt">GL_ANGLE_instanced_arrays</a>
</li>
<li value=110> <a href="extensions/ANGLE/ANGLE_pack_reverse_row_order.txt">GL_ANGLE_pack_reverse_row_order</a>
</li>
<li value=111> <a href="extensions/ANGLE/ANGLE_texture_compression_dxt.txt">GL_ANGLE_texture_compression_dxt3</a>
     <br> <a href="extensions/ANGLE/ANGLE_texture_compression_dxt.txt">GL_ANGLE_texture_compression_dxt5</a>
</li>
<li value=112> <a href="extensions/ANGLE/ANGLE_texture_usage.txt">GL_ANGLE_texture_usage</a>
</li>
<li value=113> <a href="extensions/ANGLE/ANGLE_translated_shader_source.txt">GL_ANGLE_translated_shader_source</a>
</li>
<li value=114> <a href="extensions/FJ/shader_binary_GCCSO.txt">GL_FJ_shader_binary_GCCSO</a>
</li>
<li value=115> <a href="extensions/OES/OES_required_internalformat.txt">GL_OES_required_internalformat</a>
</li>
<li value=116> <a href="extensions/OES/OES_surfaceless_context.txt">GL_OES_surfaceless_context</a>
</li>
<li value=117> <a href="extensions/KHR/texture_compression_astc_ldr.txt">GL_KHR_texture_compression_astc_ldr</a>
</li>
<li value=118> <a href="extensions/KHR/debug.txt">GL_KHR_debug</a>
</li>
<li value=119> <a href="extensions/QCOM/QCOM_binning_control.txt">GL_QCOM_binning_control</a>
</li>
<li value=120> <a href="extensions/ARM/ARM_mali_program_binary.txt">GL_ARM_mali_program_binary</a>
</li>
<li value=121> <a href="extensions/EXT/EXT_map_buffer_range.txt">GL_EXT_map_buffer_range</a>
</li>
<li value=122> <a href="extensions/EXT/EXT_shader_framebuffer_fetch.txt">GL_EXT_shader_framebuffer_fetch</a>
</li>
<li value=123> <a href="extensions/APPLE/APPLE_copy_texture_levels.txt">GL_APPLE_copy_texture_levels</a>
</li>
<li value=124> <a href="extensions/APPLE/APPLE_sync.txt">GL_APPLE_sync</a>
</li>
<li value=125> <a href="extensions/EXT/EXT_multiview_draw_buffers.txt">GL_EXT_multiview_draw_buffers</a>
</li>
<li value=126> <a href="extensions/NV/draw_texture.txt">GL_NV_draw_texture</a>
</li>
<li value=127> <a href="extensions/NV/NV_packed_float.txt">GL_NV_packed_float</a>
</li>
<li value=128> <a href="extensions/NV/NV_texture_compression_s3tc.txt">GL_NV_texture_compression_s3tc</a>
</li>
<li value=129> <a href="extensions/NV/NV_3dvision_settings.txt">GL_NV_3dvision_settings</a>
</li>
<li value=130> <a href="extensions/NV/NV_texture_compression_latc.txt">GL_NV_texture_compression_latc</a>
</li>
<li value=131> <a href="extensions/NV/NV_platform_binary.txt">GL_NV_platform_binary</a>
</li>
<li value=132> <a href="extensions/NV/NV_pack_subimage.txt">GL_NV_pack_subimage</a>
</li>
<li value=133> <a href="extensions/NV/NV_texture_array.txt">GL_NV_texture_array</a>
</li>
<li value=134> <a href="extensions/NV/NV_pixel_buffer_object.txt">GL_NV_pixel_buffer_object</a>
</li>
<li value=135> <a href="extensions/NV/NV_bgr.txt">GL_NV_bgr</a>
</li>
<li value=136> <a href="extensions/OES/OES_depth_texture_cube_map.txt">GL_OES_depth_texture_cube_map</a>
</li>
<li value=137> <a href="extensions/EXT/EXT_color_buffer_float.txt">GL_EXT_color_buffer_float</a>
</li>
<li value=138> <a href="extensions/ANGLE/ANGLE_depth_texture.txt">GL_ANGLE_depth_texture</a>
</li>
<li value=139> <a href="extensions/ANGLE/ANGLE_program_binary.txt">GL_ANGLE_program_binary</a>
</li>
<li value=140> <a href="extensions/IMG/IMG_texture_compression_pvrtc2.txt">GL_IMG_texture_compression_pvrtc2</a>
</li>
<li value=141> <a href="extensions/NV/NV_draw_instanced.txt">GL_NV_draw_instanced</a>
</li>
<li value=142> <a href="extensions/NV/NV_framebuffer_blit.txt">GL_NV_framebuffer_blit</a>
</li>
<li value=143> <a href="extensions/NV/NV_framebuffer_multisample.txt">GL_NV_framebuffer_multisample</a>
</li>
<li value=144> <a href="extensions/NV/NV_generate_mipmap_sRGB.txt">GL_NV_generate_mipmap_sRGB</a>
</li>
<li value=145> <a href="extensions/NV/NV_instanced_arrays.txt">GL_NV_instanced_arrays</a>
</li>
<li value=146> <a href="extensions/NV/NV_shadow_samplers_array.txt">GL_NV_shadow_samplers_array</a>
</li>
<li value=147> <a href="extensions/NV/NV_shadow_samplers_cube.txt">GL_NV_shadow_samplers_cube</a>
</li>
<li value=148> <a href="extensions/NV/NV_sRGB_formats.txt">GL_NV_sRGB_formats</a>
</li>
<li value=149> <a href="extensions/NV/NV_texture_border_clamp.txt">GL_NV_texture_border_clamp</a>
</li>
</ol>
<?php include("../../_inc/registry/registry_footer.txt"); ?>
</body>  <!-- END pagewrapper -->
</html>
