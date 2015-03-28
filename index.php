<?php
$static_title = 'Khronos OpenGL ES Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'OpenGL ES Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos OpenGL ES Registry</h1>
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenGL ES Registry </h1>

<p> The OpenGL ES registry contains specifications of the core API and
    shading language; specifications of Khronos- and vendor-approved
    OpenGL ES extensions; header files corresponding to the
    specifications; and other related documentation. The companion <a
    href="http://www.opengl.org/registry/"> OpenGL Registry </a> has
    related material including the API registry of reserved enumerants
    and functions (shared between OpenGL ES and OpenGL). </p>

<p> <b>Table of Contents</b>
<ul>
<li> <b><a href="#specs">Current OpenGL ES API and Shading Language
     Specifications and Reference Pages</a></b>
     <ul>
     <li> <a href="#specs31">OpenGL ES 3.1 Specifications</a> </li>
     <li> <a href="#specs3">OpenGL ES 3 Specifications</a> </li>
     <li> <a href="#specs2">OpenGL ES 2 Specifications</a> </li>
     <li> <a href="#specs11">OpenGL ES 1.1 Specifications</a> </li>
     <li> <a href="#specs10">OpenGL ES 1.0 Specification</a> </li>
     </ul> </li>
<li> <b><a href="#headers">Core API and Extension Header Files</a></b>
     <ul>
     <li> <a href="#headers31">OpenGL ES 3.1 Header Files</a> </li>
     <li> <a href="#headers3">OpenGL ES 3.0 Header Files</a> </li>
     <li> <a href="#headers2">OpenGL ES 2 Header Files</a> </li>
     <li> <a href="#headers1">OpenGL ES 1.1 Header Files</a> </li>
     <li> <a href="#headerskhr">Shared Khronos Header File</a> </li>
     </ul> </li>
<li> <b><a href="#specfiles">XML API Registry</a></b> of Reserved
     Enumerants and Functions </li>
<li> <b><a href="#headersold">Legacy OpenGL ES Headers</a></b>
<li> <b><a href="#otherextspecs">OpenGL ES Extension Registry</a></b>
<li> <b> <a href="https://www.khronos.org/files/ip-disclosures/opengl/">
     IP Disclosures</a> Potentially Affecting OpenGL ES Implementations
     </b></li>
</ul>

<hr>

<h6> <a name="specs"></a> OpenGL ES Core API and Shading Language
     Specifications and Reference Pages </h6>

<p> The current version of OpenGL ES is OpenGL ES 3.1. Specifications
    for older versions 3.0, 2.0, 1.1, and 1.0 are also available below.
    For additional specifications, headers, and documentation not listed
    below, see the <a
    href="http://www.khronos.org/developers/specs/">Khronos.org
    Developer Pages</a>. Header files not labelled with a revision date
    include their last update time in comments near the top of the file.
    </p>

<h6> <a name="specs31"></a> OpenGL ES 3.1 Specifications and
     Documentation </h6>

<ul>
<li> OpenGL ES 3.1 Specification (January 29, 2015),
     <a href="specs/3.1/es_spec_3.1.pdf"> without changes marked </a>
     and
     <a href="specs/3.1/es_spec_3.1.withchanges.pdf"> with changes marked </a>. </li>
<li> OpenGL ES Shading Language 3.10 Specification (June 6, 2014)
     <a href="specs/3.1/GLSL_ES_Specification_3.10.pdf"> without changes marked </a>
     and
     <a href="specs/3.1/GLSL_ES_Specification_3.10.withchanges.pdf"> with changes marked </a>. </li>
<li> <a href="http://www.khronos.org/opengles/sdk/docs/man31/">
      OpenGL ES 3.1 Online Manual Pages.</a> </li>
</ul>

<h6> <a name="specs3"></a> OpenGL ES 3.0 Specifications and
     Documentation </h6>

<ul>
<li> OpenGL ES 3.0.4
     <a href="specs/3.0/es_spec_3.0.4.pdf"> Specification </a>
     (August 27, 2014).
<li> OpenGL ES Shading Language 3.00.4
     <a href="specs/3.0/GLSL_ES_Specification_3.00.4.pdf">
     Specification </a> (March 6, 2013). </li>
<li> <a href="http://www.khronos.org/opengles/sdk/docs/man3/">
      OpenGL ES 3.0 Online Manual Pages.</a> </li>
</ul>

<h6> <a name="specs2"></a> OpenGL ES 2.0 Specifications and
     Documentation </h6>

<ul>
<li> OpenGL ES 2.0.25
     <a href="specs/2.0/es_full_spec_2.0.25.pdf">
     Full Specification </a>,
     <a href="specs/2.0/es_full_spec_2.0.25.withchanges.pdf">
     Full Specification with changes marked</a>,
     <a href="specs/2.0/es_cm_spec_2.0.25.pdf">
     Difference Specification </a> (November 2, 2010).
     A
     <a href="http://www.cutt.co.jp/book/978-4-87783-267-4.html">
     Japanese translation </a> of the specification is also available.
     </li>
<li> OpenGL ES Shading Language 1.0.17
     <a href="specs/2.0/GLSL_ES_Specification_1.0.17.pdf">
     Specification </a> (May 12, 2009). </li>
<li> <a href="http://www.khronos.org/opengles/sdk/docs/man/">
      OpenGL ES 2.0 Online Manual Pages.</a> </li>
</ul>


<h6> <a name="specs11"></a> OpenGL ES 1.1 Specifications and
     Documentation </h6>

<ul>
<li> OpenGL ES 1.1.12
     <a href="specs/1.1/es_full_spec_1.1.12.pdf"> Full Specification </a>
     and
     <a href="specs/1.1/es_cm_spec_1.1.12.pdf"> Difference Specification </a>
     (April 24, 2008). </li>
<li> <a href="specs/1.1/opengles_spec_1_1_extension_pack.pdf"> OpenGL ES
     1.1.03 Extension Pack </a> (July 19, 2005). </li>
<li> <a href="http://www.khronos.org/opengles/sdk/1.1/docs/man/">
     OpenGL ES 1.1 Online Manual Pages.</a> </li>
</ul>

<h6> <a name="specs10"></a> OpenGL ES 1.0 Specification and
     Documentation </h6>

<ul>
<li> <a href="specs/1.0/opengles_spec_1_0.pdf"> OpenGL ES 1.0.02
     Specification </a>. </li>
<li> <tt><a href="api/1.0/gl.h"> gl.h </a></tt> for OpenGL ES 1.0. </li>
<li> The old <i>OpenGL ES 1.0 and EGL 1.0 Reference Manual</i> is
     obsolete and has been removed from the Registry. Please use the
     <a href="http://www.khronos.org/opengles/sdk/1.1/docs/man/">
     OpenGL ES 1.1 Online Manual Pages</a> instead. </li>
</ul>

<hr>

<h6> <a name="headers"></a> API and Extension Header Files </h6>

<p> Because extensions vary from platform to platform and driver to
    driver, OpenGL ES segregates headers for each API version into a
    header for the core API (OpenGL ES 1.0, 1.1, 2.0, 3.0, and 3.1) and
    a separate header defining extension interfaces for that core API.
    These header files are supplied here for developers and platform
    vendors. They define interfaces including enumerants, prototypes,
    and for platforms supporting dynamic runtime extension queries, such
    as Linux and Microsoft Windows, function pointer typedefs. Please
    report problems using the <a
    href="http://www.khronos.org/bugzilla/">public Khronos Bugzilla</a>.
    </p>

<p> In addition to the core API and extension headers, there is also an
    OpenGL ES version-specific platform header file intended to define
    calling conventions and data types specific to a platform. </p>

<p> Finally, almost all of the headers described below depend on a
    platform header file common to multiple Khronos APIs called
    <tt>&lt;KHR/khrplatform.h&gt;</tt>. </p>

<p> Vendors may include modified versions of any or all of these headers
    with their OpenGL ES implementations, but in general only the
    platform-specific OpenGL ES and Khronos headers are likely to be
    modified by the implementation. This makes it possible for
    developers to drop in more recently updated versions of the headers
    obtained here, typically when new extensions are supplied
    on a platform. </p>

<p> <a name="headers31"></a> <b> OpenGL ES 3.1 Headers </b> </p>

<ul>
<li> <tt><a href="api/GLES3/gl31.h"> &lt;GLES3/gl31.h&gt; </a></tt>
     OpenGL ES 3.1 Header File. </li>
<li> <tt><a href="api/GLES2/gl2ext.h"> &lt;GLES2/gl2ext.h&gt; </a></tt>
     OpenGL ES Extension Header File (this header is defined to contain
     all defined extension interfaces for OpenGL ES 2.0 and all later
     versions, since later versions are backwards-compatible with OpenGL
     ES 2.0).
     </li>
<li> <tt><a href="api/GLES3/gl3platform.h"> &lt;GLES3/gl3platform.h&gt; </a></tt>
     OpenGL ES 3.1 Platform-Dependent Macros (this header is shared with
     OpenGL ES 3.0). </li>
</ul>

<p> <a name="headers3"></a> <b> OpenGL ES 3.0 Headers </b> </p>

<ul>
<li> <tt><a href="api/GLES3/gl3.h"> &lt;GLES3/gl3.h&gt; </a></tt>
     OpenGL ES 3.0 Header File. </li>
<li> <tt><a href="api/GLES2/gl2ext.h"> &lt;GLES2/gl2ext.h&gt; </a></tt>
     OpenGL ES Extension Header File. </li>
<li> <tt><a href="api/GLES3/gl3platform.h"> &lt;GLES3/gl3platform.h&gt; </a></tt>
     OpenGL ES 3.0 Platform-Dependent Macros. </li>
</ul>

<p> <a name="headers2"></a> <b> OpenGL ES 2.0 Headers </b> </p>

<ul>
<li> <tt><a href="api/GLES2/gl2.h"> &lt;GLES2/gl2.h&gt; </a></tt>
     OpenGL ES 2.0 Header File. </li>
<li> <tt><a href="api/GLES2/gl2ext.h"> &lt;GLES2/gl2ext.h&gt; </a></tt>
     OpenGL ES Extension Header File. </li>
<li> <tt><a href="api/GLES2/gl2platform.h"> &lt;GLES2/gl2platform.h&gt; </a></tt>
     OpenGL ES 2.0 Platform-Dependent Macros. </li>
</ul>

<p> <a name="headers1"></a> <b> OpenGL ES 1.1 Headers </b> </p>

<ul>
<li> <tt><a href="api/GLES/gl.h"> &lt;GLES/gl.h&gt; </a></tt>
     OpenGL ES 1.1 Header File. </li>
<li> <tt><a href="api/GLES/glext.h"> &lt;GLES/glext.h&gt; </a></tt>
     OpenGL ES 1.1 Extension Header File. </li>
<li> <tt><a href="api/GLES/glplatform.h"> &lt;GLES/glplatform.h&gt; </a></tt>
     OpenGL ES 1.1 Platform-Dependent Macros. </li>
<li> <tt><a href="api/GLES/egl.h"> &lt;GLES/egl.h&gt; </a></tt>
     EGL Legacy Header File for OpenGL ES 1.1 (August 6, 2008) -
     requires real <tt>&lt;EGL/egl.h&gt;</tt> from the
     <a href="http://www.khronos.org/registry/egl/"> EGL Registry </a>.
     </li>
</ul>

<p> <a name="headerskhr"></a> <b> Khronos Shared Platform Header
    (<tt>&lt;KHR/khrplatform.h&gt;</tt>) </b> </p>

<ul>
<li> The OpenGL ES 3.0, 2.0, and 1.1 headers all depend on the shared
     <tt><a href="../egl/api/KHR/khrplatform.h"> &lt;KHR/khrplatform.h&gt; </a></tt>
     header located in the <a href="../egl/"> EGL Registry </a>
</ul>

<hr>

<h6> <a name="specfiles"></a> XML API Registry of Reserved Enumerants
     and Functions</h6>

<p> The API Registry is a set of XML documents defining the APIs and
    enumerants used in OpenGL, OpenGL ES, EGL, and related APIs, as well as
    enumerant ranges reserved to vendors but not used yet. There are
    also scripts for loading the XML and processing it into header
    files. All documents in the registry are available from the Khronos
    Subversion server using <a
    href="https://cvs.khronos.org/svn/repos/ogl/trunk/doc/registry/public/api/">
    anonymous public access. </a> Start with the <a
    href="https://cvs.khronos.org/svn/repos/ogl/trunk/doc/registry/public/api/readme.pdf">
    README </a>. </p>

<hr>

<h6> <a name="headersold"></a> <b> Legacy OpenGL ES Headers </b> </h6>

<p> Current versions of the OpenGL ES 3.1, 3.0 and 2.0 headers are
    autogenerated from the <a href="#specfiles">XML API Registry</a>.
    Older, handcoded versions of the 3.0 and 2.0 headers are
    functionally equivalent, but structurally different. We are no
    longer maintaining the handcoded headers, but they remain available
    for comparison: </p>

<ul>
<li> Legacy OpenGL ES 3
     <a href="api/old/3.0/gl3.h">gl3.h</a>,
     <a href="api/old/3.0/gl3ext.h">gl3ext.h</a> (empty), and
     <a href="api/old/3.0/gl3platform.h">gl3platform.h</a>.
<li> Legacy OpenGL ES 2
     <a href="api/old/2.0/gl2.h">gl2.h</a>,
     <a href="api/old/2.0/gl2ext.h">gl2ext.h</a>, and
     <a href="api/old/2.0/gl2platform.h">gl2platform.h</a>.
</ul>

<hr>
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
<li value=117> <a href="extensions/KHR/texture_compression_astc_hdr.txt">GL_KHR_texture_compression_astc_hdr</a>
     <br> <a href="extensions/KHR/texture_compression_astc_hdr.txt">GL_KHR_texture_compression_astc_ldr</a>
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
<li value=150> <a href="extensions/EXT/EXT_disjoint_timer_query.txt">GL_EXT_disjoint_timer_query</a>
</li>
<li value=151> <a href="extensions/EXT/EXT_draw_buffers.txt">GL_EXT_draw_buffers</a>
</li>
<li value=152> <a href="extensions/EXT/texture_sRGB_decode.txt">GL_EXT_texture_sRGB_decode</a>
</li>
<li value=153> <a href="extensions/EXT/EXT_sRGB_write_control.txt">GL_EXT_sRGB_write_control</a>
</li>
<li value=154> <a href="extensions/EXT/texture_compression_s3tc.txt">GL_EXT_texture_compression_s3tc</a>
</li>
<li value=155> <a href="extensions/EXT/EXT_pvrtc_sRGB.txt">GL_EXT_pvrtc_sRGB</a>
</li>
<li value=156> <a href="extensions/EXT/EXT_instanced_arrays.txt">GL_EXT_instanced_arrays</a>
</li>
<li value=157> <a href="extensions/EXT/draw_instanced.txt">GL_EXT_draw_instanced</a>
</li>
<li value=158> <a href="extensions/NV/NV_copy_buffer.txt">GL_NV_copy_buffer</a>
</li>
<li value=159> <a href="extensions/NV/NV_explicit_attrib_location.txt">GL_NV_explicit_attrib_location</a>
</li>
<li value=160> <a href="extensions/NV/NV_non_square_matrices.txt">GL_NV_non_square_matrices</a>
</li>
<li value=161> <a href="extensions/EXT/shader_integer_mix.txt">GL_EXT_shader_integer_mix</a>
</li>
<li value=162> <a href="extensions/OES/OES_texture_compression_astc.txt">GL_OES_texture_compression_astc</a>
</li>
<li value=163> <a href="extensions/NV/blend_equation_advanced.txt">GL_NV_blend_equation_advanced</a>
     <br> <a href="extensions/NV/blend_equation_advanced.txt">GL_NV_blend_equation_advanced_coherent</a>
</li>
<li value=164> <a href="extensions/INTEL/performance_query.txt">GL_INTEL_performance_query</a>
</li>
<li value=165> <a href="extensions/ARM/ARM_shader_framebuffer_fetch.txt">GL_ARM_shader_framebuffer_fetch</a>
</li>
<li value=166> <a href="extensions/ARM/ARM_shader_framebuffer_fetch_depth_stencil.txt">GL_ARM_shader_framebuffer_fetch_depth_stencil</a>
</li>
<li value=167> <a href="extensions/EXT/EXT_shader_pixel_local_storage.txt">GL_EXT_shader_pixel_local_storage</a>
</li>
<li value=168> <a href="extensions/KHR/blend_equation_advanced.txt">GL_KHR_blend_equation_advanced</a>
     <br> <a href="extensions/KHR/blend_equation_advanced.txt">GL_KHR_blend_equation_advanced_coherent</a>
</li>
<li value=169> <a href="extensions/OES/OES_sample_shading.txt">GL_OES_sample_shading</a>
</li>
<li value=170> <a href="extensions/OES/OES_sample_variables.txt">GL_OES_sample_variables</a>
</li>
<li value=171> <a href="extensions/OES/OES_shader_image_atomic.txt">GL_OES_shader_image_atomic</a>
</li>
<li value=172> <a href="extensions/OES/OES_shader_multisample_interpolation.txt">GL_OES_shader_multisample_interpolation</a>
</li>
<li value=173> <a href="extensions/OES/OES_texture_stencil8.txt">GL_OES_texture_stencil8</a>
</li>
<li value=174> <a href="extensions/OES/OES_texture_storage_multisample_2d_array.txt">GL_OES_texture_storage_multisample_2d_array</a>
</li>
<li value=175> <a href="extensions/EXT/EXT_copy_image.txt">GL_EXT_copy_image</a>
</li>
<li value=176> <a href="extensions/EXT/EXT_draw_buffers_indexed.txt">GL_EXT_draw_buffers_indexed</a>
</li>
<li value=177> <a href="extensions/EXT/EXT_geometry_shader.txt">GL_EXT_geometry_shader</a>
     <br> <a href="extensions/EXT/EXT_geometry_shader.txt">GL_EXT_geometry_point_size</a>
</li>
<li value=178> <a href="extensions/EXT/EXT_gpu_shader5.txt">GL_EXT_gpu_shader5</a>
</li>
<li value=179> <a href="extensions/EXT/EXT_shader_implicit_conversions.txt">GL_EXT_shader_implicit_conversions</a>
</li>
<li value=180> <a href="extensions/EXT/EXT_shader_io_blocks.txt">GL_EXT_shader_io_blocks</a>
</li>
<li value=181> <a href="extensions/EXT/EXT_tessellation_shader.txt">GL_EXT_tessellation_shader</a>
     <br> <a href="extensions/EXT/EXT_tessellation_shader.txt">GL_EXT_tessellation_point_size</a>
</li>
<li value=182> <a href="extensions/EXT/EXT_texture_border_clamp.txt">GL_EXT_texture_border_clamp</a>
</li>
<li value=183> <a href="extensions/EXT/EXT_texture_buffer.txt">GL_EXT_texture_buffer</a>
</li>
<li value=184> <a href="extensions/EXT/EXT_texture_cube_map_array.txt">GL_EXT_texture_cube_map_array</a>
</li>
<li value=185> <a href="extensions/EXT/EXT_texture_view.txt">GL_EXT_texture_view</a>
</li>
<li value=186> <a href="extensions/EXT/EXT_primitive_bounding_box.txt">GL_EXT_primitive_bounding_box</a>
</li>
<li value=187> <a href="extensions/ANDROID/ANDROID_extension_pack_es31a.txt">GL_ANDROID_extension_pack_es31a</a>
</li>
<li value=188> <a href="extensions/EXT/EXT_compressed_ETC1_RGB8_sub_texture.txt">GL_EXT_compressed_ETC1_RGB8_sub_texture</a>
</li>
<li value=189> <a href="extensions/KHR/robust_buffer_access_behavior.txt">GL_KHR_robust_buffer_access_behavior</a>
</li>
<li value=190> <a href="extensions/KHR/robustness.txt">GL_KHR_robustness</a>
</li>
<li value=191> <a href="extensions/KHR/context_flush_control.txt">GL_KHR_context_flush_control</a>
</li>
<li value=192> <a href="extensions/DMP/DMP_program_binary.txt">GL_DMP_program_binary</a>
</li>
<li value=193> <a href="extensions/APPLE/APPLE_clip_distance.txt">GL_APPLE_clip_distance</a>
</li>
<li value=194> <a href="extensions/APPLE/APPLE_color_buffer_packed_float.txt">GL_APPLE_color_buffer_packed_float</a>
</li>
<li value=195> <a href="extensions/APPLE/APPLE_texture_packed_float.txt">GL_APPLE_texture_packed_float</a>
</li>
<li value=196> <a href="extensions/NV/internalformat_sample_query.txt">GL_NV_internalformat_sample_query</a>
</li>
<li value=197> <a href="extensions/NV/bindless_texture.txt">GL_NV_bindless_texture</a>
</li>
<li value=198> <a href="extensions/NV/conditional_render.txt">GL_NV_conditional_render</a>
</li>
<li value=199> <a href="extensions/NV/path_rendering.txt">GL_NV_path_rendering</a>
</li>
<li value=200> <a href="extensions/NV/NV_image_formats.txt">GL_NV_image_formats</a>
</li>
<li value=201> <a href="extensions/NV/NV_shader_noperspective_interpolation.txt">GL_NV_shader_noperspective_interpolation</a>
</li>
<li value=202> <a href="extensions/NV/NV_viewport_array.txt">GL_NV_viewport_array</a>
</li>
<li value=203> <a href="extensions/EXT/EXT_base_instance.txt">GL_EXT_base_instance</a>
</li>
<li value=204> <a href="extensions/EXT/EXT_draw_elements_base_vertex.txt">GL_EXT_draw_elements_base_vertex</a>
</li>
<li value=205> <a href="extensions/EXT/EXT_multi_draw_indirect.txt">GL_EXT_multi_draw_indirect</a>
</li>
<li value=206> <a href="extensions/EXT/EXT_render_snorm.txt">GL_EXT_render_snorm</a>
</li>
<li value=207> <a href="extensions/EXT/EXT_texture_norm16.txt">GL_EXT_texture_norm16</a>
</li>
<li value=208> <a href="extensions/OES/OES_copy_image.txt">GL_OES_copy_image</a>
</li>
<li value=209> <a href="extensions/OES/OES_draw_buffers_indexed.txt">GL_OES_draw_buffers_indexed</a>
</li>
<li value=210> <a href="extensions/OES/OES_geometry_shader.txt">GL_OES_geometry_shader</a>
</li>
<li value=211> <a href="extensions/OES/OES_gpu_shader5.txt">GL_OES_gpu_shader5</a>
</li>
<li value=212> <a href="extensions/OES/OES_primitive_bounding_box.txt">GL_OES_primitive_bounding_box</a>
</li>
<li value=213> <a href="extensions/OES/OES_shader_io_blocks.txt">GL_OES_shader_io_blocks</a>
</li>
<li value=214> <a href="extensions/OES/OES_tessellation_shader.txt">GL_OES_tessellation_shader</a>
</li>
<li value=215> <a href="extensions/OES/OES_texture_border_clamp.txt">GL_OES_texture_border_clamp</a>
</li>
<li value=216> <a href="extensions/OES/OES_texture_buffer.txt">GL_OES_texture_buffer</a>
</li>
<li value=217> <a href="extensions/OES/OES_texture_cube_map_array.txt">GL_OES_texture_cube_map_array</a>
</li>
<li value=218> <a href="extensions/OES/OES_texture_view.txt">GL_OES_texture_view</a>
</li>
<li value=219> <a href="extensions/OES/OES_draw_elements_base_vertex.txt">GL_OES_draw_elements_base_vertex</a>
</li>
<li value=220> <a href="extensions/OES/OES_EGL_image_external_essl3.txt">GL_OES_EGL_image_external_essl3</a>
</li>
<li value=221> <a href="extensions/EXT/EXT_texture_sRGB_R8.txt">GL_EXT_texture_sRGB_R8</a>
</li>
<li value=222> <a href="extensions/EXT/EXT_YUV_target.txt">GL_EXT_yuv_target</a>
</li>
<li value=223> <a href="extensions/EXT/EXT_texture_sRGB_RG8.txt">GL_EXT_texture_sRGB_RG8</a>
</li>
<li value=224> <a href="extensions/EXT/EXT_float_blend.txt">GL_EXT_float_blend</a>
</li>
<li value=225> <a href="extensions/EXT/post_depth_coverage.txt">GL_EXT_post_depth_coverage</a>
</li>
<li value=226> <a href="extensions/EXT/raster_multisample.txt">GL_EXT_raster_multisample</a>
</li>
<li value=227> <a href="extensions/EXT/texture_filter_minmax.txt">GL_EXT_texture_filter_minmax</a>
</li>
<li value=228> <a href="extensions/NV/conservative_raster.txt">GL_NV_conservative_raster</a>
</li>
<li value=229> <a href="extensions/NV/fragment_coverage_to_color.txt">GL_NV_fragment_coverage_to_color</a>
</li>
<li value=230> <a href="extensions/NV/fragment_shader_interlock.txt">GL_NV_fragment_shader_interlock</a>
</li>
<li value=231> <a href="extensions/NV/framebuffer_mixed_samples.txt">GL_NV_framebuffer_mixed_samples</a>
</li>
<li value=232> <a href="extensions/NV/fill_rectangle.txt">GL_NV_fill_rectangle</a>
</li>
<li value=233> <a href="extensions/NV/geometry_shader_passthrough.txt">GL_NV_geometry_shader_passthrough</a>
</li>
<li value=234> <a href="extensions/NV/path_rendering_shared_edge.txt">GL_NV_path_rendering_shared_edge</a>
</li>
<li value=235> <a href="extensions/NV/sample_locations.txt">GL_NV_sample_locations</a>
</li>
<li value=236> <a href="extensions/NV/sample_mask_override_coverage.txt">GL_NV_sample_mask_override_coverage</a>
</li>
<li value=237> <a href="extensions/NV/viewport_array2.txt">GL_NV_viewport_array2</a>
</li>
<li value=238> <a href="extensions/NV/NV_polygon_mode.txt">GL_NV_polygon_mode</a>
</li>
</ol>
<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
