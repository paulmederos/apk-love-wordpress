# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = ""
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"

# You can select your preferred output style here (can be overridden via the command line):
output_style = :compressed # or :expanded or :nested or :compact

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

module Sass::Script::Functions
  def aws_image_url(string)
    assert_type string, :String
    Sass::Script::String.new("url(http://americanparkour.s3.amazonaws.com/assets/community/#{string.value})")
  end

  def aws_community_image_url(string)
    assert_type string, :String
    Sass::Script::String.new("url(http://americanparkour.s3.amazonaws.com/assets/community/#{string.value})")
  end
end