<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * 退出码列表
 *
 * 0 - OK.
 * 1 - General error (or PHP minimal requirement not matched).
 * 4 - Some files have invalid syntax (only in dry-run mode).
 * 8 - Some files need fixing (only in dry-run mode).
 * 16 - Configuration error of the application.
 * 32 - Configuration error of a Fixer.
 * 64 - Exception raised within the application.
 */
return (new Config())->setRules([
    '@PhpCsFixer' => true,

    'dir_constant' => true,                      // dirname(__FILE__) 替换为 __DIR__
    'ereg_to_preg' => true,                      // preg 替换 ereg
    'no_unset_cast' => false,                    // 允许使用 unset
    'echo_tag_syntax' => ['format' => 'long'],   // 允许使用 <?= 来输出

    'void_return' => true,                 // 为无返回添加 void
    'strict_param' => true,                // 严格的参数
    'static_lambda'  => false,             // 禁止将匿名函数声明为 static
    'phpdoc_summary' => false,             // phpdoc 摘要结束符不限制
    'strict_comparison' => true,           // 严格的比较符
    'single_line_throw' => true,           // 异常抛出只占一行
    'heredoc_indentation' => true,         // heredoc nowdoc 必须适当缩进
    'protected_to_private' => false,       // 禁止 protected 转 private
    'combine_nested_dirname' => true,      // dirname 不能嵌套，而是用 $level
    'ternary_to_null_coalescing' => true,  // 在需要的地方使用 ?? 合并运算符
    'no_superfluous_phpdoc_tags' => false, // 参数注释的规则

    // 注释
    'phpdoc_line_span' => true,                                          // 注释单行转多行 (const, method, property)
    'phpdoc_to_param_type' => true,                                      // 修复注释的参数类型
    'phpdoc_to_return_type' => true,                                     // 修复注释的返回类型
    'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],  // 补全缺失的参数注释

    'not_operator_with_space' => false,                         // 否定 ! 操作符前后不允许有空格
    'php_unit_test_class_requires_covers' => false,             // 禁止添加 @coversNothing
    'nullable_type_declaration_for_default_null_value' => true, // 参数默认值为 null 的，为其声明类型前加上?

    // 数组声明使用短语法
    'list_syntax' => ['syntax' => 'short'],
    'array_syntax' => ['syntax' => 'short'],

    // 删除错误抑制符 @
    'error_suppression' => ['noise_remaining_usages' => true],

    // 多行参数每行一个
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],

    // 赋值声明中 = 应该被空格环绕
    'declare_equal_normalize' => ['space' => 'single'],

    // 在分号之前禁止多行空格或将分号移动到新行
    'multiline_whitespace_before_semicolons' =>
    [
        'strategy' => 'no_multi_line',
    ],

     // 删除多余的空白行
     'no_extra_blank_lines' => ['tokens' =>
     [
         'extra', 'break', 'continue',
     ]],

    // 为原生和全局方法添加反斜杠
    'native_function_invocation' =>
    [
        'include' => ['@all'],
        'scope' => 'all',
        'strict' => true,
    ],

    // 二进制运算符排列
    'binary_operator_spaces' =>
    [
        'default' => 'align_single_space_minimal',
    ],

    // 花括号的处理
    'braces' =>
    [
        'allow_single_line_closure' => true,
        'position_after_control_structures' => 'next',
        'position_after_anonymous_constructs' => 'next',
        'position_after_functions_and_oop_constructs' => 'next',
    ],

    // 命名空间引入
    'global_namespace_import' =>
    [
        'import_classes' => true,
        'import_constants' => false,
        'import_functions' => false,
    ],

    // 引入顺序
    'ordered_imports' =>
    [
        'sort_algorithm' => 'length',
        'imports_order'  => ['const', 'function', 'class'],
    ],

    // 以下语句开始前需要空一行
    'blank_line_before_statement' => ['statements' =>
     [
         'case', 'declare', 'default', 'do', 'for', 'foreach', 'goto', 'if',
         'return', 'switch', 'throw', 'try', 'while', 'exit'
     ]],
])
->setFinder(Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
);
