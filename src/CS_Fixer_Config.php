<?php
/**
 * Provides a PHP Coding Standards Fixer configuration that enhances
 * on the base WordPress coding standards.
 */

namespace Mirite\Formatting;

/**
 * Gets the standard PHP CS Fixer configuration.
 */
class CS_Fixer_Config {
	/**
	 * Gets the standard PHP CS Fixer configuration.
	 *
	 * @param  string $root_dir Typically __DIR__.
	 * @return mixed The configuration.
	 */
	public static function get_config( string $root_dir ): mixed {
		$finder = \PhpCsFixer\Finder::create()
			->in( $root_dir )
			->exclude( 'node_modules' )
			->exclude( 'vendor' );

		$config = new \PhpCsFixer\Config();

		return $config
			->setIndent( "\t" )
			->setLineEnding( "\n" )
			->setRules(
				array(
					'spaces_inside_parentheses'           => array( 'space' => 'single' ),
					'array_syntax'                        => array( 'syntax' => 'long' ),
					'indentation_type'                    => true,
					'array_indentation'                   => true,
					'braces_position'                     => array(
						'classes_opening_brace'   => 'same_line',
						'functions_opening_brace' => 'same_line',
					),
					'control_structure_braces'            => true,
					'yoda_style'                          => true,
					'blank_line_before_statement'         => array(
						'statements' => array(
							'break',
							'case',
							'continue',
							'declare',
							'default',
							'do',
							'exit',
							'for',
							'foreach',
							'goto',
							'if',
							'include',
							'include_once',
							'phpdoc',
							'require',
							'require_once',
							'return',
							'switch',
							'throw',
							'try',
							'while',
							'yield',
							'yield_from',
						),
					),
					'ordered_class_elements'              => array( 'sort_algorithm' => 'alpha' ),
					'group_import'                        => true,
					'no_unused_imports'                   => true,
					'ordered_imports'                     => true,
					'ordered_types'                       => true,
					'visibility_required'                 => true,
					'phpdoc_add_missing_param_annotation' => array( 'only_untyped' => false ),
					'simple_to_complex_string_variable'   => true,
					'explicit_string_variable'            => true,
				)
			)
			->setFinder( $finder );
	}
}
